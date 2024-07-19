<?php $__env->startSection('content'); ?>
<div class="row " style="padding-left: 25px">
<div class="col-md-6" style="padding-left: 0px">
    <a class="btn btn-success " href="/mahasiswa/tambah"><i class="fas fa-plus"></i> Tambah Data</a>
    <a class="btn btn-primary " href="/mahasiswa/cetak-pdf" target="_blank"><i class="fas fa-print" ></i> Cetak PDF</a>
</div>


<br><br>

<div class="card mb-4">
<div class="card-header">
    <i class="fas fa-table me-1"></i>
    Data mahasiswa
</div>
<div class="card-body">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi/Button</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($item->npm); ?></td>
                <td><?php echo e($item->nama); ?></td>
                <td><?php echo e($item->jurusan); ?></td>
                <td>
                    <a href="/mahasiswa/edit/<?php echo e($item->id); ?>">Edit</a> |
                    <a href="/mahasiswa/delete/<?php echo e($item->id); ?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
   
</div>
</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\testkelas6a\resources\views/mahasiswa/mahasiswa.blade.php ENDPATH**/ ?>