<?php

namespace App\Http\Controllers\ClientApp;

use App\Enums\QuestionSectionsEnum;
use App\Http\Controllers\Controller;
use App\Models\ClientQuestionnaire;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionnaireAPIController extends Controller
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
        $questions = Question::where('active', 1)->get();

        $groupedQuestions = [];
        foreach ($questions as $key => $question) {
            $groupedQuestions[$question->section][] = $question;
        }
        return response()->json(['data' => $groupedQuestions]);
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
     * @param  \App\Models\ClientQuestionnaire  $clientQuestionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(ClientQuestionnaire $clientQuestionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientQuestionnaire  $clientQuestionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientQuestionnaire $clientQuestionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientQuestionnaire  $clientQuestionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientQuestionnaire $clientQuestionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientQuestionnaire  $clientQuestionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientQuestionnaire $clientQuestionnaire)
    {
        //
    }
}
