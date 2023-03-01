<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo app('Illuminate\Foundation\Vite')(["resources/scss/app.scss","resources/css/app.css","resources/js/app.js",'resources/sass/app.scss']); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('js/scripts.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title><?php echo $__env->yieldContent('titol'); ?></title>
</head>
<body>
    <div id="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProjecteLaravel\project\resources\views/layouts/master.blade.php ENDPATH**/ ?>