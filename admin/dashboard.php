<?php
session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
    header("location: login.php");
    exit;
}

require_once ("config/db.php");
require_once ("config/conexion.php");

$active_facturas="";
$active_productos="active";
$active_clientes="";
$active_usuarios="";
$title="HM - Admin";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php");?>
    <link href="dist/css/sb-admin-2.css" rel="stylesheet" />
</head>

<body>
    <?php
	    include("navbar.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php
                                include ("config/countcon.php");
                                ?>
                                <div class="huge">
                                    <?php echo  $users; ?>
                                </div>
                                <div>Administradores</div>
                            </div>
                        </div>
                    </div>
                    <a href="usuarios.php">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalles</span>
                            <span class="pull-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-heart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php
                                include ("config/countcon.php");
                                ?>
                                <div class="huge"><?php echo  $clientes; ?></div>
                                <div>Clientes</div>
                            </div>
                        </div>
                    </div>
                    <a href="clientes.php">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalles</span>
                            <span class="pull-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
		    		<div class="btn-group pull-right">
						<button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevoCliente"><span class="glyphicon glyphicon-plus" ></span> Nuevo Cliente</button>
					</div>
					<h4><i class='glyphicon glyphicon-book'></i> Libreta de direcciones</h4>
				</div>
				<div class="panel-body">
					<?php
						include("modal/registro_clientes.php");
						include("modal/editar_clientes.php");
					?>
					<form class="form-horizontal" role="form" id="datos_cotizacion">
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Cliente</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del cliente" onkeyup='load(1);'>
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar
								</button>
								<span id="loader"></span>
							</div>
						</div>
					</form>
					<div id="resultados"></div><!-- Carga los datos ajax -->
					<div class='outer_div'></div><!-- Carga los datos ajax -->
				</div>
			</div>
		</div>

    </div>
    <hr />
    <?php
	    include("footer.php");
    ?>
    <script type="text/javascript" src="js/VentanaCentrada.js"></script>
    <script type="text/javascript" src="js/clientes.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>