<a href="/stok/create">Create Stok</a><br>
<a href="/penerbit/create">Create Penerbit</a><br>
<a href="/buku/create">Create buku</a><br>

<?php $__currentLoopData = $s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<hr>
  Buku : <?php echo e($in->buku->nama); ?><br>
  Penerbit : <?php echo e($in->penerbit->nama); ?><br>
  Tanggal Masuk : <?php echo e($in->tgl_masuk); ?><br>
  Jumlah : <?php echo e($in->jumlah); ?><br>

  <a href="/stok/<?php echo e($in->id); ?>/edit">Edit</a>
  <a href="/stok/<?php echo e($in->id); ?>">Show</a>

  <form class="" action="/stok/<?php echo e($in->id); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>

  <hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
