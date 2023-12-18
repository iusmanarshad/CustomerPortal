<?php

namespace App\Http\Controllers\CustomerPortal;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class ClientAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClientResource::collection(User::where('role_id', 2)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['sometimes'],
            'owner_name' => ['sometimes'],
            'email' => ['required', 'email'],
            'password' => ['required_with:email'],
        ]);
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['sometimes'],
            'owner_name' => ['sometimes'],
            'email' => ['required', 'email'],
            'password' => ['required_with:email'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $clientData = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'owner_name' => $validated['owner_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role_id' => 2,
        ];

        $existingUser = User::where('email', $clientData['email'])->first() ?? null;
        if ($existingUser) {
            return response()->json(['errors' => ['This email has already been taken']], 422);
        }

        User::create($clientData);

        return response()->json(['messgae' => 'Success!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['sometimes'],
            'owner_name' => ['sometimes'],
            'email' => ['required', 'email'],
            'password' => ['sometimes'],
        ]);
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['sometimes'],
            'owner_name' => ['sometimes'],
            'email' => ['required', 'email'],
            'password' => ['sometimes'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $existingUser = User::where('email', $validated['email'])->where('id', '!=' , $user->id)->first() ?? null;
        if ($existingUser) {
            return response()->json(['errors' => ['This email has already been taken']], 422);
        }

        $user->first_name = $validated['first_name'];
        $user->last_name = $validated['last_name'];
        $user->owner_name = $validated['owner_name'];
        $user->email = $validated['email'];
        if (isset($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }
        $user->save();

        return response()->json(['messgae' => 'Success!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return response()->json(['messgae' => 'Success!']);
    }
}
