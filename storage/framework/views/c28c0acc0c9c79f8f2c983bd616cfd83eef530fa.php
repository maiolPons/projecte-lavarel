

<?php $__env->startSection('titol','Crear Sponsors'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('GuardarSponsors')); ?>" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-8offset-2">
                <div class="row">
                    <h1>Crear Sponsor</h1>
                </div>
                
                <div class="row mb-3">
                    <label for="name_sponsor" class="col-md-4 col-form-label">Nom</label>
                    <input id="name_sponsor" 
                        type="text" 
                        class="form-control <?php $__errorArgs = ['name_sponsor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="name_sponsor" 
                        value="<?php echo e(old('name_sponsor')); ?>" 
                        required autocomplete="name_sponsor" autofocus>

                    <?php $__errorArgs = ['name_sponsor'];
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
                    <label for="CIF_sponsor" class="col-md-4 col-form-label">CIF</label>
                    <input id="CIF_sponsor" 
                        type="text" 
                        class="form-control <?php $__errorArgs = ['CIF_sponsor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="CIF_sponsor" 
                        value="<?php echo e(old('CIF_sponsor')); ?>" 
                        required autocomplete="CIF_sponsor" autofocus>

                    <?php $__errorArgs = ['CIF_sponsor'];
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
                    <label for="sponsor_address" class="col-md-4 col-form-label">Adreça</label>
                    <input id="sponsor_address" 
                        type="text"
                        class="form-control <?php $__errorArgs = ['sponsor_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="sponsor_address" 
                        value="<?php echo e(old('sponsor_address')); ?>" 
                        required autocomplete="sponsor_address" autofocus>

                    <?php $__errorArgs = ['sponsor_address'];
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
                    <label for="home_page" class="col-md-4 col-form-label">Pagina web</label>
                    <input id="home_page" 
                        type="text" 
                        class="form-control <?php $__errorArgs = ['home_page'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="home_page" 
                        value="<?php echo e(old('home_page')); ?>" 
                        required autocomplete="home_page" autofocus>

                    <?php $__errorArgs = ['home_page'];
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
                    <label for="logo" class="col-md-4 col-form-label">Logo</label>
                    <input type="file" class="form-control-file" id="logo" name="logo">
                    <?php $__errorArgs = ['logo'];
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
                <div class="row pt-4">
                    <button class="btn btn-primary col-md-2">Afegir sponsor</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/admin/sponsors/create.blade.php ENDPATH**/ ?>