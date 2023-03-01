

<?php $__env->startSection('titol','modificar Cursa'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('actualitzarCurses')); ?>" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-8offset-2">
                <div class="row">
                    <h1>modificar Cursa</h1>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">Descripcio</label>
                    <input id="description" 
                        type="text" 
                        value="<?php echo e($curses->description); ?>"
                        class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="description" 
                        value="<?php echo e(old('description')); ?>" 
                        required autocomplete="description" autofocus>

                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row mb-3">
                    <label for="unevenness" class="col-md-4 col-form-label">Desnivell</label>
                    <input id="unevenness" 
                        type="text" 
                        value="<?php echo e($curses->unevenness); ?>"
                        class="form-control <?php $__errorArgs = ['unevenness'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="unevenness" 
                        value="<?php echo e(old('unevenness')); ?>" 
                        required autocomplete="unevenness" autofocus>

                    <?php $__errorArgs = ['unevenness'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row mb-3">
                    <label for="max_people" class="col-md-4 col-form-label">Numero de Participants</label>
                    <input id="max_people" 
                        type="number"
                        min="1" 
                        value="<?php echo e($curses->max_people); ?>"
                        class="form-control <?php $__errorArgs = ['max_people'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="max_people" 
                        value="<?php echo e(old('max_people')); ?>" 
                        required autocomplete="max_people" autofocus>

                    <?php $__errorArgs = ['max_people'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row mb-3">
                    <label for="kms" class="col-md-4 col-form-label">Kilometres</label>
                    <input id="kms" 
                        type="number" 
                        value="<?php echo e($curses->kms); ?>"
                        class="form-control <?php $__errorArgs = ['kms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="kms" 
                        value="<?php echo e(old('kms')); ?>" 
                        required autocomplete="kms" autofocus>

                    <?php $__errorArgs = ['kms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row mb-3">
                    <label for="cost_price" class="col-md-4 col-form-label">Preu Sponsor</label>
                    <input id="cost_price" 
                        type="number"
                        min="0"
                        value="<?php echo e($curses->cost_price); ?>"
                        class="form-control <?php $__errorArgs = ['cost_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="cost_price" 
                        value="<?php echo e(old('cost_price')); ?>" 
                        required autocomplete="cost_price" autofocus>

                    <?php $__errorArgs = ['cost_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row mb-3">
                    <label for="date_start" class="col-md-4 col-form-label">Data</label>
                    <input id="date_start" 
                        type="date" 
                        value="<?php echo e($curses->date_start); ?>"
                        class="form-control <?php $__errorArgs = ['date_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="date_start" 
                        value="<?php echo e(old('date_start')); ?>" 
                        required autocomplete="date_start" autofocus>

                    <?php $__errorArgs = ['date_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row mb-3">
                    <label for="time_start" class="col-md-4 col-form-label">Hora sortida</label>
                    <input id="time_start" 
                        type="time" 
                        value="<?php echo e($curses->time_start); ?>"
                        class="form-control <?php $__errorArgs = ['time_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="time_start" 
                        value="<?php echo e(old('time_start')); ?>" 
                        required autocomplete="time_start" autofocus>

                    <?php $__errorArgs = ['time_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row mb-3">
                    <label for="map_url" class="col-md-4 col-form-label">Url mapa</label>
                    <input id="map_url" 
                        type="text" 
                        value="<?php echo e($curses->map_url); ?>"
                        class="form-control <?php $__errorArgs = ['map_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="map_url" 
                        value="<?php echo e(old('map_url')); ?>" 
                        required autocomplete="map_url" autofocus>

                    <?php $__errorArgs = ['map_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row">
                    <label for="promotion_img" class="col-md-4 col-form-label">imatge promocional</label>
                    <input type="file" class="form-control-file" id="promotion_img" name="promotion_img">
                    <?php $__errorArgs = ['promotion_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <input type="hidden" value="<?php echo e($_GET['id']); ?>" name="id">
                <div class="row pt-4">
                    <button class="btn btn-primary col-md-2">Actualitza cursa</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/admin/curses/update.blade.php ENDPATH**/ ?>