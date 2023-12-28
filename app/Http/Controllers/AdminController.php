<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $clients = User::where('role_id', RoleEnum::CLIENTROLE)->get();
        return view('customer-portal.index', compact('clients'));
    }
}
