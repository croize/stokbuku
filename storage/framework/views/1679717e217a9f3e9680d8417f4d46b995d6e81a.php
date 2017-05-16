<a href="/penerbit/create">Create</a><br>

<?php $__currentLoopData = $sindex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<hr>
  <?php echo e($in->nama); ?><br>
  <?php echo e($in->alamat); ?><br>
  <?php echo e($in->kontak); ?><br>
  <a href="/penerbit/<?php echo e($in->id); ?>">Show detail</a>
  <a href="/penerbit/<?php echo e($in->id); ?>/edit">Edit</a>
  <form class="" action="/penerbit/<?php echo e($in->id); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>
  <hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
