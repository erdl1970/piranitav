<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title><?php echo $__env->yieldContent('title', 'Pirañita Acuario'); ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/material-kit.css')); ?>" rel="stylesheet"/>

    <?php echo $__env->yieldContent('styles'); ?>

</head>

<body class="<?php echo $__env->yieldContent('body-class'); ?>"> <!--DEFINIENDO UNA SECCION -->
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="img-circle img-responsive img-raised">
                <ul>
                    <li class="li">
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><h4> Home</h4></a>
                    </li>
                    <li class="li">
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img class="tamaño" src="<?php echo e('/img/logopirana.png'); ?>"></a>
                    </li>

                </ul>
            </div>

        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">Ingresar</a></li>
                    <li><a href="<?php echo e(route('register')); ?>">Registro</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo e(url('/home')); ?>">Panel de compras</a>
                            </li>
                            <?php if(auth()->user()->admin): ?>
                                <li>
                                    <a href="<?php echo e(url('/admin/categories')); ?>">Gestionar categorías</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/admin/products')); ?>">Gestionar productos</a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                
                
                
                
                
                
                <li>
                    <a href="https://www.facebook.com/piranitacuarioperu/" target="_blank"
                       class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/piranita_acuario_peru/?utm_source=ig_profile_share&igshid=kziexx4h5juu&fbclid=IwAR3tm1tlDWeCSrny8WftYncuSftTDgy5EcNLXv_gby_oNd9TkxFeydo3oQk"
                       target="_blank"
                       class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">


    <?php echo $__env->yieldContent('content'); ?>

</div>


</body>
<!--   Core JS Files   -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/material.min.js')); ?>"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo e(asset('js/nouislider.min.js')); ?>" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="/public/js/bootstrap-datepicker.js" type="text/javascript"></script>
// "../asset/img/favicon.png"

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo e(asset('js/material-kit.js')); ?>" type="text/javascript"></script>

<SCRIPT>
    $('#personal').on('hidden', function () {
        $(this).find('form')[0].reset();
        $("label.error").remove();
    });
</SCRIPT>

<?php echo $__env->yieldContent('scripts'); ?>
</html>



