<form class="" action="/buku/<?php echo e($editto->id); ?>" method="post">
  <?php echo e(csrf_field()); ?>

  Nama :
  <input type="text" name="nama" value="<?php echo e($editto->nama); ?>"><br>
  Harga jual :
  <input type="text" name="hargajual" value="<?php echo e($editto->hargajual); ?>"><br>
  Harga dasar :
  <input type="text" name="hargadasar" value="<?php echo e($editto->hargadasar); ?>"><br>
  <input type="hidden" name="_method" value="put">
  <input type="submit" name="" value="Submit">
</form>
