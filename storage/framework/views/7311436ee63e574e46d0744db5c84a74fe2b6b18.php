<form class="" action="/penerbit/<?php echo e($editto->id); ?>" method="post">
  <?php echo e(csrf_field()); ?>

  Nama :
  <input type="text" name="nama" value="<?php echo e($editto->nama); ?>"><br>
  Alamat :
  <input type="text" name="alamat" value="<?php echo e($editto->alamat); ?>"><br>
  Kontak :
  <input type="text" name="kontak" value="<?php echo e($editto->kontak); ?>"><br>
  <input type="hidden" name="_method" value="put">
  <input type="submit" name="" value="Submit">
</form>
