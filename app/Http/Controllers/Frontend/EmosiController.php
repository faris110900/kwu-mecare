<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Emosi;

class EmosiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emosi = Emosi::all();

        return view('admin.emosi.index', compact('emosi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.emosi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('success', 'Data berhasil ditambah');

        Emosi::create([
            'name' => request('name')
        ]);

        return redirect()->route('frontend.emosi.index');
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
    public function edit(Emosi $emosi)
    {

        return view('admin.emosi.edit', compact('emosi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Emosi $emosi)
    {
        Alert::success('success', 'Data berhasil diupdate');

        $emosi->update([
            'name' => request('name')
        ]);

        return redirect()->route('frontend.emosi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emosi $emosi)
    {
        $emosi->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return redirect()->route('frontend.emosi.index');
    }
}
