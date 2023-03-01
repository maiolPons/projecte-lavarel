

<?php $__env->startSection('titol','llistar Aseguradores'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    
    <div class="row">
            <h1>llistar Aseguradores</h1>
        </div>
        <div class="row">
        <table>
            <tr><th>CIF</th><th>Nom</th><th>Adreça</th><th>Preu</th></tr>
        <?php $__currentLoopData = $insurers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($insurer->CIF); ?></td>
            <td><?php echo e($insurer->insurers_name); ?></td>
            <td><?php echo e($insurer->insurers_address); ?></td>
            <td><?php echo e($insurer->insurers_price); ?></td>
            <td><a href="<?php echo e(route('modificarInsurers',['id' =>  $insurer->id])); ?>">Modificar</a></td>
            <?php if($insurer->status==1): ?>
                <td><button class="btn"><a href="<?php echo e(route('actualitzarEstatInsurers', $insurer->id)); ?>">Desactivar</a></button></td>
            <?php else: ?>
                <td><button class="btn"><a href="<?php echo e(route('actualitzarEstatInsurers', $insurer->id)); ?>">Activar</a></button></td>
            <?php endif; ?>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>



   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/admin/insurers/show.blade.php ENDPATH**/ ?>