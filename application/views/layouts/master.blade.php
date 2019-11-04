<!doctype html>
<html lang="en">

<head>
    <title>Wariasan APP </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- Material Kit CSS -->
    <link href="{{base_url()}}/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link href='assets/core/main.css' rel='stylesheet' />
    <link href='assets/daygrid/main.css' rel='stylesheet' />


</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white">
            <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
            <div class="logo">
                <a href="" class="simple-text logo-mini">
                    <i class="fa fa-stethoscope display-2"></i>
                </a>
                <a href="" class="simple-text logo-normal font-weight-bold">
                    Monitor Infus
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item <?= cekActive() == 'dashboard' ? 'active' : ''  ?>">
                        <a class="nav-link" href="<?= base_url('dashboard') ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?= cekActive() == 'monitor' ? 'active' : ''  ?> ">
                        <a class="nav-link >" href="<?= base_url('monitor') ?>">
                            <i class="material-icons">build</i>
                            <p>monitor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link >" href="<?= base_url('auth/logout') ?>">
                            <i class="fa fa-lock"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    <!-- your sidebar here -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">

                            <!-- your navbar here -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="">
                                    Hanan Asyrawi
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{base_url()}}assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="{{base_url()}}assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="{{base_url()}}assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="{{base_url()}}assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{base_url()}}assets/js/plugins/chartist.min.js"></script>
    <script src="{{base_url()}}assets/js/plugins/bootstrap-notify.js"></script>
    <script src='{{base_url()}}assets/core/main.js'></script>
    <script src='{{base_url()}}assets/daygrid/main.js'></script>
    <script src="{{base_url()}}assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <script>
        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
        $('.main-panel').perfectScrollbar('update');
        $('select').selectpicker();
    </script>
    @yield('scripts');
    <script>
        let ws = new WebSocket('ws://192.168.43.172/')

        // Seidakan Variable infus 1 ; 
        let infus1 = 5000;
        // Sediakan Variable infus 2 ; 
        let infus2 = 5000;
        // Sediakan Variable infus 3 ; 
        let infus3 = 5000;
        // Seidakan Variable infus 4 ; 
        let infus4 = 5000;
        ws.onopen = function() {
            setInterval(() => {
                ws.send('Siap');
            });
        };
        ws.onmessage = (res) => {
            let data = res.data;
            let json = JSON.parse(data);
            $(document).ready(function() {
                if (json.sensor1 == 'sensor1') {
                    let hasil1 = infus1--
                    if(hasil1 <= 0 ) { 
                        $('#infus1').text('habis');
                    }else { 
                        $('#infus1').text(hasil1);
                    }
                } else if (json.sensor2 == 'sensor2') {
                    let hasil2 = infus2--
                    if(hasil2 <= 0 ) { 
                        $('#infus2').text('habis');
                    }else { 
                        $('#infus2').text(hasil2);
                    }
                } else if (json.sensor3 == 'sensor3') {
                    let hasil3 = infus3--
                    if(hasil3 <= 0 ) { 
                        $('#infus3').text('habis');
                    }else { 
                        $('#infus3').text(hasil3);
                    }
                } else if (json.sensor4 == 'sensor4') {
                    let hasil4 = infus4--
                    if(hasil4 <= 0 ) { 
                        $('#infus4').text('habis');
                    }else { 
                        $('#infus4').text(hasil4);
                    }
                }
            })
        }
    </script>
</body>

</html>