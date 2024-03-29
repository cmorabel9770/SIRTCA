
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIRTCA | Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php asset("bower_components/bootstrap/dist/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php asset("bower_components/metisMenu/dist/metisMenu.min.css")?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php asset("dist/css/sb-admin-2.css")?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php asset("bower_components/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Ingresar al sistema SIRTCA</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php url("login/ingresar") ?>" method="post">
                        <input value="<?php csrf_token() ?>" name="_token" type="hidden">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="admin@entregalorapido.com" name="email" type="email" required autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required>
                            </div>
                           <!-- <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                </label>
                            </div>-->
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                    <br>
                    <?php if(Session::has("estado") && Session::has("mensaje")){ ?>

                    <div class="alert alert-danger">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    	<strong>Error! </strong> <?php echo Session::get("mensaje");  ?>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php asset("bower_components/jquery/dist/jquery.min.js")?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php asset("bower_components/bootstrap/dist/js/bootstrap.min.js")?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php asset("bower_components/metisMenu/dist/metisMenu.min.js")?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php asset("dist/js/sb-admin-2.js")?>"></script>

</body>

</html>
