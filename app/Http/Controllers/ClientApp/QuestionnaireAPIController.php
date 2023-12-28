<?php

namespace App\Http\Controllers\ClientApp;

use App\Http\Controllers\Controller;
use App\Http\Services\InvitationService;
use App\Models\Associate;
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
        $action = 'add';
        $groupedQuestions = [];
        $associateQuestions = [];
        foreach ($questions as $key => $question) {
            $question->value = $question->type == 'boolean' ? $question->default : '';
            $alreadySavedQuestion = ClientQuestionnaire::where('client_id', auth()->user()->id)->where('question_id', $question->id)->first() ?? null;

            if ($alreadySavedQuestion) {
                $question->value = $alreadySavedQuestion->answer;
                $action = 'edit';
            }

            if (!empty($question->parent_key)) {
                $groupedQuestions[$question->section][$question->parent_key]['further_questions'][] = $question;
            } else {
                $groupedQuestions[$question->section][$question->key]['question'] = $question;
            }

        }

        $associates = Associate::where('associate_id', auth()->user()->id)->get() ?? null;
        if ($associates && count($associates) > 0) {

            foreach ($associates as $key => $associate) {
                $associateQuestions[] = [
                    'id' => $associate->id,
                    'questions' => [
                        [
                            'type' => 'string',
                            'question' => 'First Name',
                            'is_required' => 1,
                            'is_read_only' => 0,
                            'key' => 'associate_first_name',
                            'value' => $associate->first_name,
                        ],
                        [
                            'type' => 'string',
                            'question' => 'Last Name',
                            'is_required' => 1,
                            'is_read_only' => 0,
                            'key' => 'associate_last_name',
                            'value' => $associate->last_name
                        ],
                        [
                            'type' => 'email',
                            'question' => 'Email',
                            'is_required' => 1,
                            'is_read_only' => 1,
                            'key' => 'associate_email',
                            'value' => $associate->email
                        ],
                    ],
                    'is_removable' => 0,
                ];
            }
        } else {
            $associateQuestions = [
                [
                    'questions' => [
                        [
                            'type' => 'string',
                            'question' => 'First Name',
                            'is_required' => 1,
                            'is_read_only' => 0,
                            'key' => 'associate_first_name',
                            'value' => ''
                        ],
                        [
                            'type' => 'string',
                            'question' => 'Last Name',
                            'is_required' => 1,
                            'is_read_only' => 0,
                            'key' => 'associate_last_name',
                            'value' => ''
                        ],
                        [
                            'type' => 'email',
                            'question' => 'Email',
                            'is_required' => 1,
                            'is_read_only' => 0,
                            'key' => 'associate_email',
                            'value' => ''
                        ],
                    ],
                    'is_removable' => 1,
                ]

            ];
        }

        return response()->json(['data' => $groupedQuestions, 'associateQuestions' => $associateQuestions, 'action' => $action]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $handleAssociates = false;
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

                        if ($question['key'] == 'is_there_any_associate' && $value == 1) {
                            $handleAssociates = true;
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

        if ($handleAssociates) {
            $associates = $request->associates;
            $associateIds = [];
            if ($associates) {
                foreach ($associates as $key => $associate) {
                    $questions = $associate['questions'];
                    $associateData = [
                        'associate_id' => auth()->user()->id,
                        'first_name' => '',
                        'last_name' => '',
                        'email' => ''
                    ];
                    if ($questions) {
                        foreach ($questions as $key => $question) {
                            if ($question['key'] == 'associate_first_name') {
                                $associateData['first_name'] = $question['value'];
                            } elseif($question['key'] == 'associate_last_name') {
                                $associateData['last_name'] = $question['value'];
                            } elseif($question['key'] == 'associate_email') {
                                $associateData['email'] = $question['value'];
                            }
                        }
                    }

                    if (isset($associate['id'])) {
                        array_push($associateIds, $associate['id']);
                        Associate::updateOrCreate([
                            'id' => $associate['id']
                        ], $associateData);

                        (new InvitationService())->process($associateData['email'], auth()->user()->email);

                    } else {
                        Associate::create($associateData);
                        (new InvitationService())->process($associateData['email'], auth()->user()->email);
                    }

                    // Handle deletion of associates
                    // if (count($associateIds) > 0) {
                    //     Associate::whereNotIn('id', $associateIds)->delete();
                    // }
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
