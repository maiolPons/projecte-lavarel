

<?php $__env->startSection('content'); ?>
    
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row">
            <h1>Master</h1>
            </div>
            <div class="row">
                <div class="col-12 titleSection">
                    Curses disponibles!
                </div>
            </div>
   
            <div class="row">
                <div class="col-12 item-holder-main">
                <?php $__currentLoopData = $cursesNoExprire; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cursa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <a class="col-2 item-main" href="<?php echo e(route('crearParticipant', $cursa->id)); ?>">
                            <div class="topText">
                                Kilometres: <?php echo e($cursa->kms); ?>

                            </div> 
                            <img src="/storage/<?php echo e($cursa->promotion_img); ?>">
                            <div class="bottomText">
                                Data: <?php echo e($cursa->date_start); ?>

                            </div>
                        </a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 titleSection">
                    Arxiu de curses!
                </div>
            </div>
            <div class="row">
                <div class="col-12 item-holder-main">
                <?php $__currentLoopData = $cursesExprired; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cursa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="col-2 item-main" href="#">
                            <div class="topText">
                                Kilometres: <?php echo e($cursa->kms); ?>

                            </div> 
                            <img src="/storage/<?php echo e($cursa->promotion_img); ?>">
                            <div class="bottomText">
                                Data: <?php echo e($cursa->date_start); ?>

                            </div>
                        </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/general/principal.blade.php ENDPATH**/ ?>