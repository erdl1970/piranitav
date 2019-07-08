<?php $__env->startSection('title', 'Pirañita Acuario'); ?>

<?php $__env->startSection('body-class','landing-page'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .team .row .col-md-4 {
        margin-bottom: 5em;
    }
    .team .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
    }
    .team .row > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
/*

    .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
        color: #999
    }

    .tt-menu {    !* used to be tt-dropdown-menu in older versions *!
        width: 190px;
        margin-top: 4px;
        padding: 4px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
        box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }

    .tt-suggestion {
        padding: 3px 20px;
        line-height: 24px;
    }

    .tt-suggestion.tt-cursor,.tt-suggestion:hover {
        color: #fff;
        background-color: #0097cf;

    }

    .tt-suggestion p {
        margin: 0;
    }

*/


</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="header header-filter" style="background-image: url('<?php echo e(asset('img/530206.jpg')); ?>');">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1 class="title" class="media-middle">Bienvenido a nuestra tienda online</h1>
                    <h4>Realiza tus pedidos en línea y te contactaremos para coordinar la entrega</h4>
                    <br/>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-warning btn-raised btn-lg">
                        <i class="fa fa-play"></i>¿Cómo funciona?
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">¿Por que utilizar nuestra tienda online?</h2>
                        <h5 class="description">Por que puedes revisar nuestra relación completa de productos, comparar
                            precios y realizar tus pedidos cuando estés seguro de hacerlos.</h5>
                    </div>
                </div>

                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Atendemos tus dudas</h4>
                                <p>Atendemos rápidamente cualquier consulta que tengas vía chat. No estás solo, sino que
                                    siempre estamos atentos a tus inquietudes.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Pago seguro</h4>
                                <p>Todo pedido que realices será confirmado a través de una llamada. Si no confías en
                                    los pagos en línea puedes pagar contra entrega el valor acordado.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">Información privada</h4>
                                <p>Los pedidos que realices sólo los conoceras tú a través de tu panel de usuario. Nadie
                                    más tiene acceso a esta información.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                <h2 class="title">Visite nuestras categorías</h2>

                <form class="form-inline" method="get" action="<?php echo e(url('/search')); ?>">
                    <input type="text" placeholder="¿Qué producto busca?" class="form-control" name="query" id="search">
                    <button class="btn btn-warning btn-just-icon" type="submit">
                            <i class="material-icons">search</i>
                    </button>
                </form>

                <div class="team">
                    <div class="row">

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="<?php echo e($category->featured_image_url); ?>" alt="Imagen representativa
                                    de la categoría <?php echo e($category->name); ?>" class="img-raised img-circle">
                                    <h4 class="title">
                                        <a href="<?php echo e(url('/categories/'.$category->id)); ?>" ><?php echo e($category->name); ?> </a>

                                    </h4>
                                    <p class="description"><?php echo e($category->description); ?></p>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>


            <div class="section landing-section">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">¿Aún no te has registrado?</h2>
                        <h4 class="text-center description">Regístrate ingresando tus datos básicos y podras realizar
                            tus pedidos a través de nuestro carrito de compras. Si aún no te decides, de todas formas
                            con tu cuenta de usuario podrás hacer todas tus consultas sin compromiso.</h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Correo electrónico</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Tu mensaje</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-warning btn-raised">
                                        Enviar consulta
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('/js/typeahead.bundle.min.js')); ?>"></script>
    <script>
        $(function () {
        //
            var products = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: '<?php echo e(url("/products/json")); ?>'
            });


            //Inicializar typehead sobre nuetro input de búsqueda
            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1

            }, {
                name:'produtcs',
                source: products
        });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>