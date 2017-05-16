<a href="/stok/create">Create Stok</a><br>
<a href="/penerbit/create">Create Penerbit</a><br>
<a href="/buku/create">Create buku</a><br>

@foreach ($s as $in)
<hr>
  Buku : {{$in->buku->nama}}<br>
  Penerbit : {{$in->penerbit->nama}}<br>
  Tanggal Masuk : {{$in->tgl_masuk}}<br>
  Jumlah : {{$in->jumlah}}<br>

  <a href="/stok/{{$in->id}}/edit">Edit</a>
  <a href="/stok/{{$in->id}}">Show</a>

  <form class="" action="/stok/{{$in->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>

  <hr>
@endforeach
