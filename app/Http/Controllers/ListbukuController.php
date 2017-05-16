<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listbuku;

class ListbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $s = Listbuku::all();
      return view('buku.index')->with('sindex', $s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
        'nama' => 'required',
        'hargajual' => 'required',
        'hargadasar' => 'required',
      ]);

      $buku = new Listbuku;
       $buku->nama = $request->nama;
       $buku->hargajual = $request->hargajual;
       $buku->hargadasar = $request->hargadasar;
       $buku->save();

       return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $detail = Listbuku::find($id);
      return view('buku.detail')->with('details', $detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit = Listbuku::find($id);
      return view('buku.edit')->with('editto', $edit);
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
        'nama' => 'required',
        'hargajual' => 'required',
        'hargadasar' => 'required',
      ]);

      $buku = Listbuku::find($id);
       $buku->nama = $request->nama;
       $buku->hargajual = $request->hargajual;
       $buku->hargadasar = $request->hargadasar;
       $buku->save();

       return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Listbuku::find($id);
        $buku->delete();
        return redirect('buku');
    }
}
