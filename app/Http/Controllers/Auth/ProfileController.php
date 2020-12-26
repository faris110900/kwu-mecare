<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Pixel;
use App\Models\Emosi;
use App\Models\Faktor;
use App\Models\PixelReact;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $pixel = Pixel::all()->where('user_id', Auth::user()->id);
        $pixelReact = PixelReact::all();

        

        $y = [];
        foreach ($pixel as $row) {
            $pixelReact = PixelReact::where('user_id', $row->user_id)->first();
            $x['sangat_buruk'] = $pixelReact->sangat_buruk;
            $x['buruk'] = $pixelReact->buruk;
            $x['biasa'] = $pixelReact->biasa;
            $x['baik'] = $pixelReact->baik;
            $x['sangat_baik'] = $pixelReact->sangat_baik;
            array_push($y, $x);
        }
        // dd($y);

        return view('auth.profile', compact('pixel', 'pixelReact', 'y', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
