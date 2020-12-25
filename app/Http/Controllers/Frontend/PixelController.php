<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Pixel;
use App\Models\Emosi;
use App\Models\Faktor;
use App\Models\PixelReact;


class PixelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pixel = Pixel::all();
        $pixelReact = PixelReact::all();

        return view('frontend.pixel.index', compact('pixel', 'pixelReact'));
    }

    public function home()
    {

        return view('frontend.pixel.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emosi = Emosi::all();
        $faktor = Faktor::all();
        $pixelReact = PixelReact::all();
        // dd($emosi);

        return view('frontend.pixel.create', compact('faktor', 'emosi', 'pixelReact'));
    }

    public function pixelCreate()
    {
        $pixelReact = PixelReact::all();

        return view('frontend.pixel.pixelReact', compact('pixelReact'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $pixelReact = PixelReact::all();

        $emosiCheckbox = "";
        $faktorCheckbox = "";

        if (!empty($request->input('emosi'))) {
            if (!empty($request->input('faktor'))) {
                $emosiCheckbox = join(',',$request->input('emosi'));
                $faktorCheckbox = join(',',$request->input('faktor'));
            } else
                dd('gagal');
        }

        Pixel::create([
            'user_id' => Auth::id(),
            'pixel_id' => $request->get('pixel_id'),
            'emosi' => $emosiCheckbox,
            'faktor' => $faktorCheckbox,
        ]);


        return redirect()->route('frontend.pixel.index');
    }

    public function pixelStore(Request $request)
    {

        $sangatBuruk = "";
        $buruk = "";
        $biasa = "";
        $baik = "";
        $sangatBaik = "";

        if ($request->get('sangat_buruk') == 'sangat_buruk') {
            $sangatBuruk = "sangat buruk";
        } else if ($request->get('buruk') == 'buruk') {
            $buruk = "buruk";
        } else if ($request->get('biasa') == 'biasa') {
            $biasa = "biasa";
        } else if ($request->get('baik') == 'baik') {
            $baik = "baik";
        } else if ($request->get('sangat_baik') == 'sangat_baik') {
            $sangatBaik = "sangat baik";
        } else {
            dd('gagal');
        }

        PixelReact::create([
            'user_id' => Auth::id(),
            'sangat_buruk' => $sangatBuruk,
            'buruk' => $buruk,
            'biasa' => $biasa,
            'baik' => $baik,
            'sangat_baik' => $sangatBaik
            // 'content' => $this->content
        ]);

        // dd($request);

        return redirect()->route('frontend.pixel.create');
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
        //
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
        //
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
