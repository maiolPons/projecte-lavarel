

<?php $__env->startSection('titol','llistar Curses'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    
    <div class="row">
            <h1>llistar curses</h1>
        </div>
        <div class="row">
        <table>
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
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>



   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/admin/curses/show.blade.php ENDPATH**/ ?>