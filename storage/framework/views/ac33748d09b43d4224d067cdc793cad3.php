<?php $__env->startSection('title', 'Tambah User Desa Dawuan'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <a href="/admin/user/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1
                ?>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->level); ?></td>
                    <td>
                        <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-warning">Edit</a>

                        <form action="<?php echo e(route('user.destroy', $user->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Kelompok 8 Web Desa\resources\views/user/index.blade.php ENDPATH**/ ?>