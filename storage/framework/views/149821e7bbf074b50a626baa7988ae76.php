<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2><?php echo e(isset($mhs) ? 'Edit' : 'Tambah'); ?> Mahasiswa</h2>

    <form action="<?php echo e(isset($mhs) ? route('mahasiswa.update', $mhs->id) : route('mahasiswa.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($mhs)): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="<?php echo e(old('nim', $mhs->nim ?? '')); ?>" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo e(old('nama', $mhs->nama ?? '')); ?>" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="<?php echo e(old('jurusan', $mhs->jurusan ?? '')); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo e(isset($mhs) ? 'Update' : 'Simpan'); ?></button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan-laravel\CRUD-Sederhana\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>