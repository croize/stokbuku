<form class="" action="/penerbit/{{$editto->id}}" method="post">
  {{csrf_field()}}
  Nama :
  <input type="text" name="nama" value="{{$editto->nama}}"><br>
  Alamat :
  <input type="text" name="alamat" value="{{$editto->alamat}}"><br>
  Kontak :
  <input type="text" name="kontak" value="{{$editto->kontak}}"><br>
  <input type="hidden" name="_method" value="put">
  <input type="submit" name="" value="Submit">
</form>
