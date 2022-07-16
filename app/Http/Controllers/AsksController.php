<?php

namespace App\Http\Controllers;

use App\Models\asks;
use App\Models\anws;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class AsksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.addquestion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        asks::create([
            'user_id' => Auth::user()->id,
            'slug' => Str::slug(request()->title, '-'),
            'title' => request()->title,
            'description' => request()->description,
        ]);

        return redirect('/');
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
     * @param  \App\Models\asks  $asks
     * @return \Illuminate\Http\Response
     */
    public function show(asks $ask)
    {
        $quest = $ask;
        $ans = anws::where('question_id',$ask->id)->get();

        return view('user.detailquestion',compact('quest','ans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asks  $asks
     * @return \Illuminate\Http\Response
     */
    public function edit(asks $asks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asks  $asks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asks $asks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asks  $asks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        asks::find($id)->delete();
        return redirect('/');
    }
}
