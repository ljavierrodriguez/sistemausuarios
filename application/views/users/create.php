<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Crear Usuario
                </div>
                <div class="panel-body">
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url(); ?>index.php/usuarios/create" method="post">
                        <div class="form-group">
                            <label class="control-label" for="name">Nombre</label>
                            <input type="hidden" class="form-control" id="id" name="id" placeholder=""
                                   value="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                                   value="<?php echo @$_POST['name'];?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="address">Edad</label>
                            <input type="text" class="form-control" id="age" name="age" placeholder="Edad"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="contact">Telefono</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefono"
                                   value="">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary" id="submit" value="Submit">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
</body>
</html>
