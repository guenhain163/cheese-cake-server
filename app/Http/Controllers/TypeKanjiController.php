<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTypeKanjiRequest;
use App\Http\Requests\UpdateTypeKanjiRequest;
use App\Models\TypeKanji;

class TypeKanjiController extends Controller
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
     * @param  \App\Http\Requests\StoreTypeKanjiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeKanjiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeKanji  $typeKanji
     * @return \Illuminate\Http\Response
     */
    public function show(TypeKanji $typeKanji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeKanji  $typeKanji
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeKanji $typeKanji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeKanjiRequest  $request
     * @param  \App\Models\TypeKanji  $typeKanji
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeKanjiRequest $request, TypeKanji $typeKanji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeKanji  $typeKanji
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeKanji $typeKanji)
    {
        //
    }
}
