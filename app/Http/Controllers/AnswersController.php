<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnswersRequest;
use App\Http\Requests\UpdateAnswersRequest;
use App\Models\Answer;

class AnswersController extends Controller
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
     * @param  \App\Http\Requests\StoreAnswersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnswersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answers
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answers
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnswersRequest  $request
     * @param  \App\Models\Answer  $answers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnswersRequest $request, Answer $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answers)
    {
        //
    }
}
