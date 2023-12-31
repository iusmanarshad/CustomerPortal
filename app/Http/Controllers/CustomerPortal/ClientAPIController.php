<?php

namespace App\Http\Controllers\CustomerPortal;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Models\ClientQuestionnaire;
use App\Models\Question;
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
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'owner_name' => ['sometimes'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $clientData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'owner_name' => $request->owner_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ];

        $client = User::create($clientData);

        $firstNameQuestion = Question::where('key', 'first_name')->first() ?? null;
        $lastNameQuestion = Question::where('key', 'last_name')->first() ?? null;
        $emailQuestion = Question::where('key', 'email')->first() ?? null;

        ClientQuestionnaire::create([
            'client_id' => $client->id,
            'question_id' => $firstNameQuestion->id,
            'answer' => $request->first_name,
        ]);
        ClientQuestionnaire::create([
            'client_id' => $client->id,
            'question_id' => $lastNameQuestion->id,
            'answer' => $request->last_name,
        ]);
        ClientQuestionnaire::create([
            'client_id' => $client->id,
            'question_id' => $emailQuestion->id,
            'answer' => $request->email,
        ]);

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

        $firstNameQuestion = Question::where('key', 'first_name')->first() ?? null;
        $lastNameQuestion = Question::where('key', 'last_name')->first() ?? null;
        $emailQuestion = Question::where('key', 'email')->first() ?? null;

        ClientQuestionnaire::updateOrCreate([
            'client_id' => $user->id,
            'question_id' => $firstNameQuestion->id,
        ],[
            'client_id' => $user->id,
            'question_id' => $firstNameQuestion->id,
            'answer' => $request->first_name,
        ]);
        ClientQuestionnaire::updateOrCreate([
            'client_id' => $user->id,
            'question_id' => $lastNameQuestion->id,
        ], [
            'client_id' => $user->id,
            'question_id' => $lastNameQuestion->id,
            'answer' => $request->last_name,
        ]);
        ClientQuestionnaire::updateOrCreate([
            'client_id' => $user->id,
            'question_id' => $emailQuestion->id,
        ], [
            'client_id' => $user->id,
            'question_id' => $emailQuestion->id,
            'answer' => $request->email,
        ]);

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
        ClientQuestionnaire::where('client_id', $id)->delete();
        return response()->json(['messgae' => 'Success!']);
    }
}
