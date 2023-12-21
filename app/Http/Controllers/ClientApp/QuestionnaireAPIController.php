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
            $question->value = $question->type == 'boolean' ? '1' : '';
            $alreadySavedQuestion = ClientQuestionnaire::where('client_id', auth()->user()->id)->where('question_id', $question->id)->first() ?? null;
            if ($alreadySavedQuestion) {
                $question->value = $alreadySavedQuestion->answer;
            }

            if (!empty($question->parent_key)) {
                $groupedQuestions[$question->section][$question->parent_key]['further_questions'][] = $question;
            } else {
                $groupedQuestions[$question->section][$question->key]['question'] = $question;
            }

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
        $questions = $request->questions;
        foreach ($questions as $sectionKey => $section) {
            foreach ($section as $questionBlockKey => $questionBlock) {
                $verifyFurtherQuestions = (
                        $questionBlockKey == 'is_there_an_opposing_party' &&
                        $questionBlock['question']['value'] == 1
                    ) ||
                    (
                        $questionBlockKey == 'billing_details_same_as_contact_details' &&
                        $questionBlock['question']['value'] == 0
                    ) ||
                    (
                        $questionBlockKey == 'trademark_details_same_as_contact_details' &&
                        $questionBlock['question']['value'] == 0
                    );
                foreach ($questionBlock as $questionKey => $question) {
                    if ($questionKey == 'question') {
                        $value = $question['value'];
                        if ($question['type'] == 'boolean') {
                            $value = $value == '1' ? 1 : 0;
                        }
                        ClientQuestionnaire::updateOrCreate([
                            'client_id' => auth()->user()->id,
                            'question_id' => $question['id'],
                        ], [
                            'client_id' => auth()->user()->id,
                            'question_id' => $question['id'],
                            'answer' => $value
                        ]);
                    } else {
                        if ($verifyFurtherQuestions) {
                            foreach ($question as $furtherQuestionkey => $furtherQuestion) {
                                $value = $furtherQuestion['value'];
                                if ($furtherQuestion['type'] == 'boolean') {
                                    $value = $value == '1' ? 1 : 0;
                                }
                                ClientQuestionnaire::updateOrCreate([
                                    'client_id' => auth()->user()->id,
                                    'question_id' => $furtherQuestion['id'],
                                ], [
                                    'client_id' => auth()->user()->id,
                                    'question_id' => $furtherQuestion['id'],
                                    'answer' => $value
                                ]);
                            }
                        }

                    }
                }

            }

        }

        return response()->json(['message' => 'Successfully saved the data!']);
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
