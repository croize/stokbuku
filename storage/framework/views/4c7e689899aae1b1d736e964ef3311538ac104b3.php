<form class="" action="/stok/<?php echo e($to->id); ?>" method="post">
  <?php echo e(csrf_field()); ?>

  Penerbit :
  <select class="" name="penerbit">
      <?php $__currentLoopData = $pen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($crp->id); ?>"<?php if(($to->penerbit_id)==($crp->id)): ?>selected <?php endif; ?>><?php echo e($crp->nama); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select><br>
  Buku :
  <select class="" name="buku">
      <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($crb->id); ?>"<?php if(($to->buku_id)==($crb->id)): ?>selected <?php endif; ?>><?php echo e($crb->nama); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select><br>
  Tanggal masuk :
  <input type="date" name="tgl" value="<?php echo e($to->tgl_masuk); ?>"><br>
  Jumlah :
  <input type="text" name="jumlah" value="<?php echo e($to->jumlah); ?>"><br>
  <input type="hidden" name="_method" value="put">
  <input type="submit" name="" value="Submit">
</form>
