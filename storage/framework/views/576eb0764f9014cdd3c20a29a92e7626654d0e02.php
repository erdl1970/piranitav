<?php $__env->startSection('title', 'Pirañita Acuario | Dashboard'); ?>

<?php $__env->startSection('body-class','profile-page'); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .team{
            padding-bottom: 50px ;
        }

        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
       /* .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
        flex-wrap: wrap;
        }
        .row > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }*/
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="header header-filter" style="background-image: url('<?php echo e(asset('img/530206.jpg')); ?>');"></div>

    <div class="main main-raised" >
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="profile">
                        <div class="avatar">
                            <img src="<?php echo e($category->featured_image_url); ?>" alt=
                            "Imagen representativa de la categoría <?php echo e($category->name); ?>"
                                 class="img-circle img-responsive img-raised">
                        </div>

                        <div class="name">
                            <h3 class="title"><?php echo e($category->name); ?></h3>

                        </div>

                        <?php if(session('notification')): ?>
                            <div class="alert alert-warning">
                                <?php echo e(session('notification')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="description text-center">
                    <p><?php echo e($category->description); ?> </p>
                </div>

                <div class="team text-center">
                    <div class="row">

                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="<?php echo e($product->featured_image_url); ?>" alt="Thumbnail Image"
                                         class="img-raised img-circle">
                                    <h4 class="title">
                                        <a href="<?php echo e(url('/products/'.$product->id)); ?>"><?php echo e($product->name); ?> </a>

                                    </h4>
                                    <p class="description"><?php echo e($product->description); ?></p>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="text center">
                        <?php echo e($products->links()); ?>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- Modal Core -->
    <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Seleccione la cantidad que desea agregar</h4>
                </div>
                <form method="post" action="<?php echo e(('/cart')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                    <div class="modal-body">
                        <input type="number" name="quantity" value="1" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info btn-simple">Añadir al carrito</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>