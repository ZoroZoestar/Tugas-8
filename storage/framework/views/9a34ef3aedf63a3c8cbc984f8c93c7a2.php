<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Data Mahasiswa</h2>
    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-success mb-3">Tambah Mahasiswa</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($mhs->nim); ?></td>
                <td><?php echo e($mhs->nama); ?></td>
                <td><?php echo e($mhs->jurusan); ?></td>
                <td>
                    <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan-laravel\CRUD-Sederhana\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>