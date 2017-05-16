<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listpenerbit;

class ListpenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = Listpenerbit::all();
        return view('penerbit.index')->with('sindex', $s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
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
        'alamat' => 'required',
        'kontak' => 'required',
      ]);

      $penerbit = new Listpenerbit;
       $penerbit->nama = $request->nama;
       $penerbit->alamat = $request->alamat;
       $penerbit->kontak = $request->kontak;
       $penerbit->save();

       return redirect('penerbit');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $detail = Listpenerbit::find($id);
      return view('penerbit.detail')->with('details', $detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Listpenerbit::find($id);
        return view('penerbit.edit')->with('editto', $edit);
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
        'alamat' => 'required',
        'kontak' => 'required',
      ]);

      $penerbit = Listpenerbit::find($id);
       $penerbit->nama = $request->nama;
       $penerbit->alamat = $request->alamat;
       $penerbit->kontak = $request->kontak;
       $penerbit->save();

       return redirect('penerbit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Listpenerbit::find($id);
        $penerbit->delete();
        return redirect('penerbit');
    }
}
