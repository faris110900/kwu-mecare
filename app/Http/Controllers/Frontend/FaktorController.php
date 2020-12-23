<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faktor;
use RealRashid\SweetAlert\Facades\Alert;

class FaktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faktor = Faktor::all();

        return view('admin.faktor.index', compact('faktor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faktor.create');
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

        Faktor::create([
            'name' => request('name')
        ]);

        return redirect()->route('frontend.faktor.index');
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
    public function edit(Faktor $faktor)
    {
        return view('admin.faktor.edit', compact('faktor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Faktor $faktor)
    {
        Alert::success('success', 'Data berhasil diubah');

        $faktor->update([
            'name' => request('name')
        ]);

        return redirect()->route('frontend.faktor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faktor $faktor)
    {
        $faktor->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return redirect()->route('frontend.faktor.index');
    }
}
