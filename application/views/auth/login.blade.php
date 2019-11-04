<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="{{base_url()}}/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link href='assets/core/main.css' rel='stylesheet' />
    <link href='assets/daygrid/main.css' rel='stylesheet' />
</head>

<body>
    <div class="content">
        <div class="row mt-5 ">
            <div class="container">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5 offset-3 mx-auto">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">vpn_lock</i>
                            </div>
                        </div>
                        <div class="card-body mt-2 mb-2 ">
                            <form action="{{ base_url('auth/aksi_login') }}" method="POST">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{base_url()}}assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="{{base_url()}}assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{base_url()}}assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="{{base_url()}}assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="{{base_url()}}assets/js/plugins/chartist.min.js"></script>
<script src="{{base_url()}}assets/js/plugins/bootstrap-notify.js"></script>
<script src='{{base_url()}}assets/core/main.js'></script>
<script src='{{base_url()}}assets/daygrid/main.js'></script>
<script src="{{base_url()}}assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<script>
    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
    $('.main-panel').perfectScrollbar('update');
</script>

</html>