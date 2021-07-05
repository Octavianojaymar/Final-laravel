<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Laravel.SAAS</title>

        <!-- Fonts -->
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"> 
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <!-- Scripts -->
        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
        
        
    </head>
    <body class="antialiased bg-gray-100" style="font-family: 'Poppins', sans-serif;">
        <div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div>
        
    </body>
</html>
<?php /**PATH D:\Applications\xampp\htdocs\laravel\laravelSaas-master\resources\views/app.blade.php ENDPATH**/ ?>