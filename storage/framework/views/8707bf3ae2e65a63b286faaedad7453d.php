<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center>
    <h1>DINAS A</h1>
    JL.......</center>
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr style="text-align: center">
            <td style="padding: 10px 25px; ">No</td>
            <td>NPM</td>
            <td>Nama</td>
            <td>Jurusan</td>
        </tr>

        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="text-align: center">
            <td style="padding: 10px 15px;"><?php echo e($key + 1); ?></td>
            <td><?php echo e($item->npm); ?></td>
            <td><?php echo e($item->nama); ?></td>
            <td><?php echo e($item->jurusan); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
</body>
</html><?php /**PATH C:\laragon\www\testkelas6a\resources\views/mahasiswa/cetak.blade.php ENDPATH**/ ?>