<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserVocabularyRequest;
use App\Http\Requests\UpdateUserVocabularyRequest;
use App\Models\UserVocabulary;

class UserVocabularyController extends Controller
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
     * @param  \App\Http\Requests\StoreUserVocabularyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserVocabularyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserVocabulary  $userVocabulary
     * @return \Illuminate\Http\Response
     */
    public function show(UserVocabulary $userVocabulary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserVocabulary  $userVocabulary
     * @return \Illuminate\Http\Response
     */
    public function edit(UserVocabulary $userVocabulary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserVocabularyRequest  $request
     * @param  \App\Models\UserVocabulary  $userVocabulary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserVocabularyRequest $request, UserVocabulary $userVocabulary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserVocabulary  $userVocabulary
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserVocabulary $userVocabulary)
    {
        //
    }
}
