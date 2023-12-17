<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $clients = User::where('role_id', 2)->get();
        return view('customer-portal.index', compact('clients'));
    }
}
