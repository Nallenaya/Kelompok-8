<?php $__env->startSection('title','Data Perangkat Desa Dawuan'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    
    <a href="/admin/perangkat/create" class="btn btn-primary mb-3">Tambah Data</a>

    <?php if($message = Session::get('message')): ?>
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1
                ?>
                <?php $__currentLoopData = $perangkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($perangkat->title); ?></td>
                    <td><?php echo e($perangkat->description); ?></td>
                    <td>
                        <img src="/image/<?php echo e($perangkat->image); ?>" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="<?php echo e(route('perangkat.edit', $perangkat->id)); ?>" class="btn btn-warning">Edit</a>
                        <br>

                        <form action="<?php echo e(route('perangkat.destroy', $perangkat->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                           <br> <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Kelompok 8 Web Desa\resources\views/perangkat/index.blade.php ENDPATH**/ ?>