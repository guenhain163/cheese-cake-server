<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKanjiVocabularyRequest;
use App\Http\Requests\UpdateKanjiVocabularyRequest;
use App\Models\KanjiVocabulary;

class KanjiVocabularyController extends Controller
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
     * @param  \App\Http\Requests\StoreKanjiVocabularyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKanjiVocabularyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KanjiVocabulary  $kanjiVocabulary
     * @return \Illuminate\Http\Response
     */
    public function show(KanjiVocabulary $kanjiVocabulary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KanjiVocabulary  $kanjiVocabulary
     * @return \Illuminate\Http\Response
     */
    public function edit(KanjiVocabulary $kanjiVocabulary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKanjiVocabularyRequest  $request
     * @param  \App\Models\KanjiVocabulary  $kanjiVocabulary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKanjiVocabularyRequest $request, KanjiVocabulary $kanjiVocabulary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KanjiVocabulary  $kanjiVocabulary
     * @return \Illuminate\Http\Response
     */
    public function destroy(KanjiVocabulary $kanjiVocabulary)
    {
        //
    }
}
