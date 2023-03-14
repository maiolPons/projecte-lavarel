

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-8">
    <div class="frame" style="background-image: url('/storage/<?php echo e($race->promotion_img); ?>')"></div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8">
        <h2>Detalls Cursa</h2>
    </div>
</div>
<?php if(now() > $race->date_start): ?>
    <div class="row ban-tag">
        <p><img  width="40" height="40" src="<?php echo e(url('/images/sword-01.svg')); ?>">Inscripcio tancada<img  width="40" height="40" src="<?php echo e(url('/images/sword-01.svg')); ?>"></p>
    </div>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="col-5">
        <p>Descripcio: <?php echo e($race->description); ?></p>
        <p>Kilometres: <?php echo e($race->kms); ?></p>
        <p>Desnivell: <?php echo e($race->unevenness); ?></p>
        <p>Preu participacio: <?php echo e($race->cost_price); ?></p>
        <p>Data de event: <?php echo e($race->date_start); ?></p>
        <p>Hora de sortida: <?php echo e($race->time_start); ?></p>
    </div>
    <div class="col-3">
     <!-- Button trigger modal -->
     <?php if(now() < $race->date_start): ?>
        <button type="button" id="btnModalFormCursa" class="btn btn-primary" data-toggle="modal" data-target="#FormulariAlta">
            Participa !
        </button>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <!-- Modal -->
                    <div class="modal fade" id="FormulariAlta" tabindex="-1" role="dialog" aria-labelledby="FormulariAltaTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="FormulariAltaTitle">Formulari Alta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo e(route('GuardarParticipant')); ?>" enctype="multipart/form-data" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label for="dni" class="col-md-4 col-form-label">Dni</label>
                                        <input id="dni" 
                                            type="text" 
                                            class="form-control <?php $__errorArgs = ['dni'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                            name="dni" 
                                            value="<?php echo e(old('dni')); ?>" 
                                            required autocomplete="dni" autofocus>

                                        <?php $__errorArgs = ['dni'];
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
                                        <label for="name_participant" class="col-md-4 col-form-label">Nom</label>
                                        <input id="name_participant" 
                                            type="text" 
                                            class="form-control <?php $__errorArgs = ['name_participant'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                            name="name_participant" 
                                            value="<?php echo e(old('name_participant')); ?>" 
                                            required autocomplete="name_participant" autofocus>

                                        <?php $__errorArgs = ['name_participant'];
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
                                        <label for="address_home" class="col-md-4 col-form-label">Direccio</label>
                                        <input id="address_home" 
                                            type="text" 
                                            class="form-control <?php $__errorArgs = ['address_home'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                            name="address_home" 
                                            value="<?php echo e(old('address_home')); ?>" 
                                            required autocomplete="address_home" autofocus>

                                        <?php $__errorArgs = ['address_home'];
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
                                        <label for="date_birth" class="col-md-4 col-form-label">Data Naixament</label>
                                        <input id="date_birth" 
                                            type="date" 
                                            class="form-control <?php $__errorArgs = ['date_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                            name="date_birth" 
                                            value="<?php echo e(old('date_birth')); ?>" 
                                            required autocomplete="date_birth" autofocus>

                                        <?php $__errorArgs = ['date_birth'];
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
                                    <div class="form-check">
                                    <input class="form-check-input" 
                                        type="checkbox" 
                                        id="flexCheckDefault"
                                        name="profecional" 
                                        value="true">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Marca si tens afiliacio
                                    </label>
                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="insurers_id" class="col-md-4 col-form-label">Asegurança</label>
                                        <select id="selectFormCursa" class="form-select" name="insurers_id">
                                            <?php $__currentLoopData = $insurer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->insurers_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

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
                                        <input type="hidden" value="<?php echo e($race->id); ?>" name="races_id">
                                        <input type="submit" class="btn btn-primary" value="Confirmar">
                                    </div>
                                </form>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" id="btnModalFormCursaClose" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    <?php endif; ?>

    </div>
</div>
<div class="row justify-content-center" id="divMap">
    <div class="col-8 h-100" id="map"></div>
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV85fgRAcaliCXmgSTV2SiVpaaUdGzqD4&callback=initMap">
        </script>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/general/races/showNew.blade.php ENDPATH**/ ?>