<?php
    use App\Http\Controllers\CursesController;
?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Menu administrado')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <ol>
                        <li class="nav-item">
                            <a href="<?php echo e(route('crearCurses')); ?>">Crear Curses</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('llistarCurses')); ?>">Llistar Curses</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('crearSponsors')); ?>">Crear Sponsors</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('llistarSponsors')); ?>">Llistar Sponsors</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('crearInsurers')); ?>">Crear Aseguradores</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('llistarInsurers')); ?>">Llistar Aseguradores</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views//admin/home.blade.php ENDPATH**/ ?>