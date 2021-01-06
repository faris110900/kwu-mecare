<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Meditasi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str; 

class MeditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $meditasi = Meditasi::all();
        
        return view('admin.meditasi.index', compact('meditasi'));
    }

    public function home()
    {
        return view('frontend.meditasi.home');
    }

    public function list(){
        $meditasi = Meditasi::all();

        return view('frontend.meditasi.index', compact('meditasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.meditasi.create');
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

        Meditasi::create([
            'name' => request('name'),
            'slug' => Str::slug(request('name')),
            'deskripsi' => request('deskripsi'),
            'image' => request('image')->store('meditasi'),
            'instrumen' => request('instrumen')->store('meditasi-instrumen')
        ]);

        return redirect()->route('frontend.meditasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Meditasi $meditasi)
    {
        
        return view('frontend.meditasi.show', compact('meditasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meditasi $meditasi)
    {

        return view('admin.meditasi.edit', compact('meditasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Meditasi $meditasi)
    {
        if($meditasi->image){
            \Storage::delete($meditasi->image);
        } else if($meditasi->instrumen) {
            \Storage::delete($meditasi->iinstrumen);
        }

        Alert::success('success', 'Data berhasil diedit');

        $meditasi->update([
            'name' => request('name'),
            'slug' => Str::slug(request('name')),
            'deskripsi' => request('deskripsi'),
            'image' => request('image')->store('meditasi'),
            'instrumen' => request('instrumen')->store('meditasi-instrumen')
        ]);

        return redirect()->route('frontend.meditasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meditasi $meditasi)
    {
        $meditasi->delete();
        Alert::success('Success', 'meditasi was deleted');

        if($meditasi->image){
            \Storage::delete($meditasi->image);
        } else if($meditasi->instrumen){
            \Storage::delete($meditasi->instrumen);
        }

        return redirect()->route('frontend.meditasi.index');
    }
}
