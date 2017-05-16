<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stokbuku;
use App\Listpenerbit;
use App\Listbuku;

class StokbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Stokbuku::all();
        return view('stokbuku.index')->with('s', $index);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pn = Listpenerbit::all();
        $bk = Listbuku::all();
        return view('stokbuku.create')->with('pen', $pn)->with('buku', $bk);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'penerbit' => 'required',
        'buku' => 'required',
        'tgl' => 'required',
        'jumlah' => 'required',
      ]);

      $stokbuku = new Stokbuku;
       $stokbuku->penerbit_id = $request->penerbit;
       $stokbuku->buku_id = $request->buku;
       $stokbuku->tgl_masuk = $request->tgl;
       $stokbuku->jumlah = $request->jumlah;
       $stokbuku->save();

       return redirect('stok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit = Stokbuku::find($id);
      $pn = Listpenerbit::all();
      $bk = Listbuku::all();
      return view('stokbuku.edit')->with('to', $edit)->with('pen', $pn)->with('buku', $bk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'penerbit' => 'required',
        'buku' => 'required',
        'tgl' => 'required',
        'jumlah' => 'required',
      ]);

      $stokbuku = Stokbuku::find($id);
       $stokbuku->penerbit_id = $request->penerbit;
       $stokbuku->buku_id = $request->buku;
       $stokbuku->tgl_masuk = $request->tgl;
       $stokbuku->jumlah = $request->jumlah;
       $stokbuku->save();

       return redirect('stok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
