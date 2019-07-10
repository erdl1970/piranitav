<?php $__env->startSection('title', 'Pirañita Acuario | Dashboard'); ?>

<?php $__env->startSection('body-class','product-page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="header header-filter"
         style="background-image: url('<?php echo e(asset('img/530206.jpg')); ?>');">
    </div>
    <div class="main main-raised">
        <div class="container">

            <div class="section">
                <h2 class="title text-left">Panel de Compras</h2>

                <?php if(session('notification')): ?>
                    <div class="alert alert-warning">
                        <?php echo e(session('notification')); ?>

                    </div>
                <?php endif; ?>

                <ul class="nav nav-pills nav-pills-success" role="tablist">
                    <li class="active">
                        <a href="#dashboard" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Carrito de compras
                        </a>
                    </li>
                    <li>
                        <a href="#tasks" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Pedidos realizados
                        </a>
                    </li>
                </ul>

                <hr>

                <p><h5>Tu carrito de compras presenta <?php echo e(auth()->user()->cart->details->count()); ?> produtos.</h5></p>

                <hr>

                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">Imagen</th>
                        <th class="text-center">Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>SubTotal</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = auth()->user()->cart->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <img src="<?php echo e($detail->product->featured_image_url); ?>" height="50">
                            </td>
                            <td>
                                <a href="<?php echo e(url('/products/'.$detail->product->id)); ?>" target="_blank"><?php echo e($detail->product->name); ?></a>
                            </td>
                            <td>S/. <?php echo e($detail->product->price); ?>

                            </td>
                            <td><?php echo e($detail->quantity); ?></td>
                            <td><?php echo e($detail->quantity * $detail->product->price); ?></td>
                            <td class="td-actions">

                                <form method="post" action="<?php echo e(url('/cart')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                                    <input type="hidden" name="cart_detail_id" value="<?php echo e($detail->id); ?>">

                                    <a href="<?php echo e(url('/products/'.$detail->product->id)); ?>" target="_blank" rel="tooltip"  title="Ver producto"
                                       class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-info"></i>
                                    </a>
                                    <button type="submit" rel="tooltip" title="Eliminar"
                                            class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <p><strong>Importe a pagar: </strong><?php echo e(auth()->user()->cart->total); ?></p>

                <div class="text-center">
                    <form method="post" action="<?php echo e(url('/order')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <button class="btn btn-primary btn-round">
                            <i class="material-icons">done</i> Realizar pedido
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>