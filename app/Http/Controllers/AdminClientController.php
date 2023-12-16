<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminClientController extends Controller
{

    public function index(Request $request)
    {
        return view('livewire.portal.admin.create-client');
    }

    public function view(Request $request)
    {
        $client = User::where('id', $request->id)->get();
        return view('livewire.portal.admin.view-client', compact('client'));
    }

    public function create(Request $request)
    {

        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['sometimes'],
            'owner_name' => ['sometimes'],
            'email' => ['required', 'email'],
            'password' => ['required_with:email'],
        ]);

        $clientData = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'owner_name' => $validated['owner_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ];

        User::updateOrCreate([
            'email' => $clientData['email']
        ], $clientData);

        return redirect('/admin/dashboard')->with('status', 'success-alert')
            ->with('alert-heading', 'Created!')
            ->with('alert-text', 'Your client has been created successfully!');
    }
}
