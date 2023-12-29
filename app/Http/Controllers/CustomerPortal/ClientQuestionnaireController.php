<?php

namespace App\Http\Controllers\CustomerPortal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientQuestionnaireController extends Controller
{

    public function index()
    {
        return view('customer-portal.clients.questionnaire');
    }

}
