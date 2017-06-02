<?php
		if (isset($title))
		{
?>


<nav class="navbar navbar-static-top navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">HM - Admin</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../admin/"><i class="fa fa-home fa-lg"></i></a></li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <?php
                        include ("config/countcon.php");
                        ?>
                        <span class="label label-warning"><?php echo  $users + $clientes; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Usted tiene <?php echo  $users + $clientes; ?> notificaciones</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="usuarios.php">
                                        <i class="fa fa-users text-aqua"></i> <?php echo  $users; ?> nuevos usuarios
                                    </a>
                                </li>
                                <li>
                                    <a href="clientes.php">
                                        <i class="fa fa-heart text-aqua"></i><?php echo  $clientes; ?> nuevos clientes
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class='glyphicon glyphicon-user'></i>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?php if(isset($active_perfil)){echo $active_perfil;}?>">
                            <a href="perfil.php">
                                <i class='glyphicon glyphicon-cog'></i>
                                Configuración
                            </a>
                        </li>
                        <li class="<?php echo $active_usuarios;?>">
                            <a href="usuarios.php">
                                <i class='glyphicon glyphicon-user'></i>
                                Usuarios
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="login.php?logout">
                                <i class='glyphicon glyphicon-log-out'></i>Salir
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<?php
}
?>
