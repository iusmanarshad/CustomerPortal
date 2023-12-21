<?php

namespace App\Http\Controllers\ClientApp;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class QuestionnaireController extends Controller
{

    public function index()
    {
        return view('client-app.questionnaire.index');
    }

}
