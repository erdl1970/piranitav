<?php $__env->startSection('body-class','signup-page'); ?>

<?php $__env->startSection('content'); ?>
<div class="header header-filter" style="background-image: url('<?php echo e(asset('img/530206.jpg')); ?>'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="header header-warning text-center">
                            <h4>Inicio de sesión</h4>
                            
                                
                                    
                                
                                
                                    
                                
                                
                                    
                                
                            
                        </div>
                        <p class="text-divider">Ingresa tus datos</p>
                        <div class="content">

                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                <input id="email" type="email" placeholder="Email..." class="form-control" name="email" value=
                                "<?php echo e(old('email')); ?>" required autofocus>
                            </div>

                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                <input  placeholder="Password..." id="password" type="password"
                                        class="form-control" name="password" required />
                            </div>

                            <!-- If you want to add a checkbox to this form, uncomment this code-->

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    Recordar sesión
                                </label>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-warning btn-lg">Ingresar</button>
                        </div>

                        <!--<a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            Forgot Your Password?
                        </a> -->

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>