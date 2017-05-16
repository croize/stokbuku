<a href="/penerbit/create">Create</a><br>

@foreach ($sindex as $in)
<hr>
  {{$in->nama}}<br>
  {{$in->alamat}}<br>
  {{$in->kontak}}<br>
  <a href="/penerbit/{{$in->id}}">Show detail</a>
  <a href="/penerbit/{{$in->id}}/edit">Edit</a>
  <form class="" action="/penerbit/{{$in->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>
  <hr>
@endforeach
