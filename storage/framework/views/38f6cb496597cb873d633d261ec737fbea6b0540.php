

<?php $__env->startSection('titol','llistar Curses'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <form action="<?php echo e(route('llistarCursesPost')); ?>">
        <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-1">
                    Buscador:
                </div>
                <div class="col-8">
                    <input type="text" name="buscar" class="form-control" >
                </div>
                <div class="col-2">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </div>   
        </form>
        <div class="row">
            <h1>llistar curses</h1>
        </div>
        <div class="row">
        <table id="racesTables">
            <tr><th>Descripcio</th><th>Desnivell</th><th>url mapa</th><th>maxim participants</th><th>Kilometres</th><th>Preu Sponsor</th><th>Imatge promocional</th><th>Hora</th><th>Dia</th></tr>
        <?php $__currentLoopData = $curses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cursa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cursa->description); ?></td>
            <td><?php echo e($cursa->unevenness); ?></td>
            <td><?php echo e($cursa->map_url); ?></td>
            <td><?php echo e($cursa->max_people); ?></td>
            <td><?php echo e($cursa->kms); ?></td>
            <td><?php echo e($cursa->cost_price); ?></td>
            <td ><img scr="/storage/<?php echo e($cursa->promotion_img); ?>" class="w-100"></td>
            <td><?php echo e($cursa->time_start); ?></td>
            <td><?php echo e($cursa->date_start); ?></td>
            <td><a href="<?php echo e(route('modificarCurses',['id' =>  $cursa->id])); ?>">Modificar</a></td>
            <?php if($cursa->status==1): ?>
                <td><button class="btn"><a href="<?php echo e(route('actualitzarEstatCurses', $cursa->id)); ?>">Desactivar</a></button></td>
            <?php else: ?>
                <td><button class="btn"><a href="<?php echo e(route('actualitzarEstatCurses', $cursa->id)); ?>">Activar</a></button></td>
            <?php endif; ?>
            <p>
            <td>
                <a class="btn btn-primary" data-toggle="collapse" href="#participants<?php echo e($cursa->id); ?>" role="button" aria-expanded="false" aria-controls="participants">
                    Mostrar participants
                </a>
            </td>
            <td> 
                <a class="btn btn-primary" href="<?php echo e(route('showUploadImages',['id' =>  $cursa->id])); ?>"><img src="<?php echo e(url('/images/uploadImg.png')); ?>" class="imageIcon" alt="Imatges"></a>
            </td>
        </tr>
        </tr>
            <td colspan="11">
            <div class="collapse" id="participants<?php echo e($cursa->id); ?>">
                <div class="card card-body">
                    <table class="mytable">
                    <thead><tr><th>dni</th><th>nom</th><th>adreça</th><th>aseguradora</th><th>data de naixament</th><th>
                        <a class="btn btn-primary" href="<?php echo e(route('generateDorsal',['id' =>  $cursa->id])); ?>">Imprimir dorçals</a>    
                        </th></tr><thead>
                        <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($cursa->id == $participant->races_id): ?>
                            
                            <tbody><tr>
                                    <td><?php echo e($participant->dni); ?></td>
                                    <td><?php echo e($participant->name_participant); ?></td>
                                    <td><?php echo e($participant->address_home); ?></td>
                                    <?php if($participant->insurers_id == null): ?>
                                        <td>Confederat</td>
                                    <?php else: ?>
                                        <td>Nom: <?php echo e($participant->insurers_name); ?> CIF: <?php echo e($participant->CIF); ?></td>
                                    <?php endif; ?>
                                    <td><?php echo e($participant->date_birth); ?></td>
                                <tr></tbody>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>



   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/admin/curses/show.blade.php ENDPATH**/ ?>