<?php

namespace App\Http\Controllers\CustomerPortal;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('customer-portal.index');
    }

}
