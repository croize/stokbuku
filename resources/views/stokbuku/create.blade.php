<form class="" action="/stok" method="post">
  {{csrf_field()}}
  Penerbit :
  <select class="" name="penerbit">
      @foreach ($pen as $crp)
        <option value="{{$crp->id}}">{{$crp->nama}}</option>
      @endforeach
  </select><br>
  Buku :
  <select class="" name="buku">
      @foreach ($buku as $crb)
        <option value="{{$crb->id}}">{{$crb->nama}}</option>
      @endforeach
  </select><br>
  Tanggal masuk :
  <input type="date" name="tgl" value=""><br>
  Jumlah :
  <input type="text" name="jumlah" value=""><br>
  <input type="submit" name="" value="Submit">
</form>
