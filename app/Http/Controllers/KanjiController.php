<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKanjiRequest;
use App\Http\Requests\UpdateKanjiRequest;
use App\Models\Kanji;

class KanjiController extends Controller
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
     * @param  \App\Http\Requests\StoreKanjiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKanjiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function show(Kanji $kanji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function edit(Kanji $kanji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKanjiRequest  $request
     * @param  \App\Models\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKanjiRequest $request, Kanji $kanji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kanji $kanji)
    {
        //
    }
}
