

<?php $__env->startSection('titol','Crear Sponsors'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('actualitzarInsurers')); ?>" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-8offset-2">
                <div class="row">
                    <h1>Modificar Aseguradora</h1>
                </div>
                
                <div class="row mb-3">
                    <label for="CIF" class="col-md-4 col-form-label">CIF</label>
                    <input id="CIF" 
                        type="text" 
                        value="<?php echo e($insurers->CIF); ?>"
                        class="form-control <?php $__errorArgs = ['CIF'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="CIF" 
                        value="<?php echo e(old('CIF')); ?>" 
                        required autocomplete="CIF" autofocus>

                    <?php $__errorArgs = ['CIF'];
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
                    <label for="insurers_name" class="col-md-4 col-form-label">Nom</label>
                    <input id="insurers_name" 
                        type="text" 
                        value="<?php echo e($insurers->insurers_name); ?>"
                        class="form-control <?php $__errorArgs = ['insurers_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="insurers_name" 
                        value="<?php echo e(old('insurers_name')); ?>" 
                        required autocomplete="insurers_name" autofocus>

                    <?php $__errorArgs = ['insurers_name'];
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
                    <label for="insurers_address" class="col-md-4 col-form-label">Adreça</label>
                    <input id="insurers_address" 
                        type="text"
                        value="<?php echo e($insurers->insurers_address); ?>"
                        class="form-control <?php $__errorArgs = ['insurers_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="insurers_address" 
                        value="<?php echo e(old('insurers_address')); ?>" 
                        required autocomplete="insurers_address" autofocus>

                    <?php $__errorArgs = ['insurers_address'];
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
                    <label for="insurers_price" class="col-md-4 col-form-label">Preu</label>
                    <input id="insurers_price" 
                        type="number" 
                        min="0"
                        value="<?php echo e($insurers->insurers_price); ?>"
                        class="form-control <?php $__errorArgs = ['insurers_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="insurers_price" 
                        value="<?php echo e(old('insurers_price')); ?>" 
                        required autocomplete="insurers_price" autofocus>

                    <?php $__errorArgs = ['insurers_price'];
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
                    <button class="btn btn-primary col-md-2">Modificar Aseguradora</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/admin/insurers/update.blade.php ENDPATH**/ ?>