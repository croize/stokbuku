<a href="/buku/create">Create</a><br>

@foreach ($sindex as $in)
<hr>
  {{$in->nama}}<br>
  {{$in->hargajual}}<br>
  {{$in->hargadasar}}<br>
  <a href="/buku/{{$in->id}}">Show detail</a>
  <a href="/buku/{{$in->id}}/edit">Edit</a>
  <form class="" action="/buku/{{$in->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>
  <hr>
@endforeach
