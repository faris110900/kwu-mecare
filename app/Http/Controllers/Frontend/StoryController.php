<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json(){
        return Datatables::of(Story::all())->make(true);
    }

    public function index()
    {
        $stories = Story::orderBy('id', 'asc')->get();

        return view('frontend.story.index', compact('stories'));
    }

    public function home(){

        $stories = Story::all();

        return view('frontend.story.home', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.story.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Alert::success('Success', 'Your story now flying');

        Story::create([
            // 'user_id' => Auth::id(),
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'image' => request('image')->store('stories'),
            'content' => request('content'),
        ]);

        return redirect()->route('frontend.story.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        return view('frontend.story.show', compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {

        return view('frontend.story.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Story $story)
    {
        
        if($story->image){
            \Storage::delete($story->image);
        }

        Alert::success('success', 'Your story updated');

        $story->update([
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'image' => request('image')->store('stories'),
            'content' => request('content'),
        ]);

        return redirect()->route('frontend.story.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {

        $story->delete();
        Alert::success('Success', 'Story was deleted');

        if($story->image){
            \Storage::delete($story->image);
        }

        return redirect()->route('frontend.story.index');
    }
    
}
