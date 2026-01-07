<?php $__env->startSection('title', 'Tambah Galeri Desa Dawuan'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <a href="/admin/galeri" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo e(route('galeri.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                 <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                 <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color:red"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Kelompok 8 Web Desa\resources\views/galeri/create.blade.php ENDPATH**/ ?>