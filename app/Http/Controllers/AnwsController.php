<?php

namespace App\Http\Controllers;

use App\Models\anws;
use App\Models\asks;
use Illuminate\Http\Request;

class AnwsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(asks $ask)
    {
        $quest = $ask;
        return view('user.answer',compact('quest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(asks $ask)
    {
        anws::create([
            'question_id' => $ask->id,
            'answer' => request()->answer,
        ]);

        return view('user.makasih');
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
     * @param  \App\Models\anws  $anws
     * @return \Illuminate\Http\Response
     */
    public function show(anws $anws)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anws  $anws
     * @return \Illuminate\Http\Response
     */
    public function edit(anws $anws)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anws  $anws
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anws $anws)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anws  $anws
     * @return \Illuminate\Http\Response
     */
    public function destroy(anws $anws)
    {
        //
    }
}
