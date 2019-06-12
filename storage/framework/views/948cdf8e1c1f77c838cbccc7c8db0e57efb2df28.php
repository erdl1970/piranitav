<?php $__env->startSection('title', 'Listado de categorías'); ?>
<?php $__env->startSection('body-class','product-page'); ?>
<?php $__env->startSection('content'); ?>
    <div class="header header-filter"
         style="background-image: url('<?php echo e(asset('img/530206.jpg')); ?>');">
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Listado de Categorías</h2>

                <div class="team">
                    <div class="row">


                        <a href="<?php echo e(url('/admin/categories/create')); ?>" class="btn btn-warning btn-round">Nueva categoría</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-5 text-center" >Descripción</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e(($key+1)); ?></td>
                                    <td><?php echo e($category->name); ?></td>
                                    <td><?php echo e($category->description); ?></td>
                                    <td class="td-actions text-right">

                                        <form method="post" action="<?php echo e(url('/admin/categories/'.$category->id.'/save')); ?>">
                                            <?php echo e(csrf_field()); ?>

                                           <?php echo e(method_field('DELETE')); ?>

                                            <a href="#" rel="tooltip" title="Ver categoría"
                                               class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="<?php echo e(url('/admin/categories/'.$category->id.'/edit')); ?>" rel="tooltip" title="Editar categoría"
                                               class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
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
                        <?php echo e($categories->links()); ?>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>