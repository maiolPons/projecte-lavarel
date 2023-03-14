

<?php $__env->startSection('content'); ?>
    
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row">
            <?php if($lastOnes): ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php if(count($lastOnes)==2): ?>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                <?php endif; ?>
                <?php if(count($lastOnes)==3): ?>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                <?php endif; ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <a href="<?php echo e(route('crearParticipant', $lastOnes[0]->id)); ?>"><div class="frameSlider frame" style="background-image: url('/storage/<?php echo e($lastOnes[0]->promotion_img); ?>')"></div>
                            <div class="carousel-caption">
                                <h3><?php echo e($lastOnes[0]->date_start); ?></h3>
                                <p><?php echo e($lastOnes[0]->kms); ?> KMS</p>
                            </div>
                        </a>
                    </div>
                <?php if(count($lastOnes)==2): ?>
                    <div class="item">
                        <a href="<?php echo e(route('crearParticipant', $lastOnes[1]->id)); ?>"><div class="frameSlider frame" style="background-image: url('/storage/<?php echo e($lastOnes[1]->promotion_img); ?>')"></div>
                            <div class="carousel-caption">
                                <h3><?php echo e($lastOnes[1]->date_start); ?></h3>
                                <p><?php echo e($lastOnes[1]->kms); ?> KMS</p>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if(count($lastOnes)==3): ?>
                    <div class="item">
                        <a href="<?php echo e(route('crearParticipant', $lastOnes[2]->id)); ?>"><div class="frameSlider frame" style="background-image: url('/storage/<?php echo e($lastOnes[2]->promotion_img); ?>')"></div>
                            <div class="carousel-caption">
                                <h3><?php echo e($lastOnes[2]->date_start); ?></h3>
                                <p><?php echo e($lastOnes[2]->kms); ?> KMS</p>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Seguent</span>
                </a>
            </div>
            <?php endif; ?>

            <div class="row">
                <h3 class="h3-title">Dona un cop d'ull a les curses que oferim <img src="<?php echo e(url('/images/yarik.png')); ?>" style="width:50px" class="sticker-png" alt=""></h3>
                
            </div>

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
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/general/principal.blade.php ENDPATH**/ ?>