

<?php $__env->startSection('titol','llistar Sponsors'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    
    <div class="row">
            <h1>llistar Sponsors</h1>
        </div>
        <div class="row">
        <table>
            <tr><th>Nom</th><th>CIF</th><th>Adreça</th><th>Pagina web</th><th>Logo</th></tr>
        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sponsor->name_sponsor); ?></td>
            <td><?php echo e($sponsor->CIF_sponsor); ?></td>
            <td><?php echo e($sponsor->sponsor_address); ?></td>
            <td><?php echo e($sponsor->home_page); ?></td>
            <td ><img scr="/storage/<?php echo e($sponsor->logo); ?>" class="w-100"></td>
            <td><a href="<?php echo e(route('modificarSponsors',['id' =>  $sponsor->id])); ?>">Modificar</a></td>
            <?php if($sponsor->status==1): ?>
                <td><button class="btn"><a href="<?php echo e(route('actualitzarEstatSponsor', $sponsor->id)); ?>">Desactivar</a></button></td>
            <?php else: ?>
                <td><button class="btn"><a href="<?php echo e(route('actualitzarEstatSponsor', $sponsor->id)); ?>">Activar</a></button></td>
            <?php endif; ?>
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>



   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/admin/sponsors/show.blade.php ENDPATH**/ ?>