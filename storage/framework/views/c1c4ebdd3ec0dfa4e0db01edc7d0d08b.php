<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<h1>Selamat Datang <?php echo e(Auth::user()->name); ?></a></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Kelompok 8 Web Desa\resources\views/dashboard.blade.php ENDPATH**/ ?>