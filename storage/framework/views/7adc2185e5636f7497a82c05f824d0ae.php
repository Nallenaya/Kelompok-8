<?php $__env->startSection('title','Edit Data Slider Desa Dawuan'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <a href="/admin/sliders" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-8 offset-md-2">
        <form action="<?php echo e(route('sliders.update', $slider->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                 <?php echo csrf_field(); ?>
                <div class="from-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="<?php echo e($slider->title); ?>">
                </div>
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color:red"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="from-group">
                    <label for="">Deskripsi</label>
                    <br>
                    <textarea name="description" id="" cols="80" rows="10" class="from-control" placeholder="Deskripsi"><?php echo e($slider->description); ?>

                    </textarea>
                </div>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color:red"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <img src="/image/<?php echo e($slider->image); ?>" alt="" class="img-fluid">
                <div class="from-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" placeholder="Gambar">
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
                <br>
                <div class="from-group">
                    <button type="submit" class= "btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Kelompok 8 Web Desa\resources\views/slider/edit.blade.php ENDPATH**/ ?>