<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\React;
use App\Models\Story;

class ReactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('success', 'Terimakasih untuk tanggapanmu');
        $story = Story::all();

        $happy = "";
        $sad = "";
        $cry = "";

        if ($request->get('react_happy') == 'react_happy' ) {
            $happy = "happy";
        } else if ($request->get('react_sad') == 'react_sad') {
            $sad = "sad";
        } else if ($request->get('react_cry') == 'react_cry') {
            $cry = "cry";
        } else {
            dd('gagal');
        }

        React::create([
            'story_id' => $request->get('story_id'),
            'react_happy' => $happy,
            'react_sad' => $sad,
            'react_cry' => $cry,
            // 'content' => $this->content
            ]);
            // dd($request->all());

        return redirect()->route('frontend.story-read', [$request->get('story_id')]);
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
