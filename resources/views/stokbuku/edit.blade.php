<form class="" action="/stok/{{$to->id}}" method="post">
  {{csrf_field()}}
  Penerbit :
  <select class="" name="penerbit">
      @foreach ($pen as $crp)
        <option value="{{$crp->id}}"@if(($to->penerbit_id)==($crp->id))selected @endif>{{$crp->nama}}</option>
      @endforeach
  </select><br>
  Buku :
  <select class="" name="buku">
      @foreach ($buku as $crb)
        <option value="{{$crb->id}}"@if(($to->buku_id)==($crb->id))selected @endif>{{$crb->nama}}</option>
      @endforeach
  </select><br>
  Tanggal masuk :
  <input type="date" name="tgl" value="{{$to->tgl_masuk}}"><br>
  Jumlah :
  <input type="text" name="jumlah" value="{{$to->jumlah}}"><br>
  <input type="hidden" name="_method" value="put">
  <input type="submit" name="" value="Submit">
</form>
