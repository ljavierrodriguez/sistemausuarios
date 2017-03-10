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
    <title><?php echo $title; ?></title>

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
                    Listado de Usuarios <a href="<?php echo base_url();?>index.php/usuarios/create" class="btn btn-warning" title="Crear Usuario"><i class="fa fa-pencil"></i></a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                            <th>Roles</th>
                            <th width="5%" colspan="2" class="text-center">Acciones</th>
                        </tr>
                        <?php if(!empty($usuarios))
                        {
                        ?>
                        <?php foreach($usuarios as $u): ?>

                            <tr>
                                <td><?php echo $u->name; ?></td>
                                <td><?php echo $u->email; ?></td>
                                <td><?php echo $u->phone; ?></td>
                                <td><?php echo $u->age; ?></td>
                                <td><?php  ?></td>
                                <td class="text-center"><a href="<?php echo base_url();?>index.php/usuarios/<?php echo $u->id?>/edit" class="btn btn-primary" title="Editar Usuario"><i class="fa fa-edit"></i></a></td>
                                <td class="text-center"><a href="<?php echo base_url();?>index.php/usuarios/<?php echo $u->id?>/delete" class="btn btn-danger" title="Eliminar Usuario"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <p>No se encontraton registros</p>
                                </td>
                            </tr>
                        <?php }?>
                    </table>
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
