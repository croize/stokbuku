<form class="" action="/buku" method="post">
  <?php echo e(csrf_field()); ?>

  Nama :
  <input type="text" name="nama" value=""><br>
  Harga Jual :
  <input type="text" name="hargajual" value=""><br>
  Harga Dasar :
  <input type="text" name="hargadasar" value=""><br>
  <input type="submit" name="" value="Submit">
</form>
