<?php

namespace App\Http\Controllers\CustomerPortal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        $clients = User::where('role_id', 2)->get();
        return view('customer-portal.index', compact('clients'));
    }
}
