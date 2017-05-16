<form class="" action="/buku/{{$editto->id}}" method="post">
  {{csrf_field()}}
  Nama :
  <input type="text" name="nama" value="{{$editto->nama}}"><br>
  Harga jual :
  <input type="text" name="hargajual" value="{{$editto->hargajual}}"><br>
  Harga dasar :
  <input type="text" name="hargadasar" value="{{$editto->hargadasar}}"><br>
  <input type="hidden" name="_method" value="put">
  <input type="submit" name="" value="Submit">
</form>
