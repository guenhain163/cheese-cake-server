<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserKanjiRequest;
use App\Http\Requests\UpdateUserKanjiRequest;
use App\Models\UserKanji;

class UserKanjiController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserKanjiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserKanjiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserKanji  $userKanji
     * @return \Illuminate\Http\Response
     */
    public function show(UserKanji $userKanji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserKanji  $userKanji
     * @return \Illuminate\Http\Response
     */
    public function edit(UserKanji $userKanji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserKanjiRequest  $request
     * @param  \App\Models\UserKanji  $userKanji
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserKanjiRequest $request, UserKanji $userKanji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserKanji  $userKanji
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserKanji $userKanji)
    {
        //
    }
}
