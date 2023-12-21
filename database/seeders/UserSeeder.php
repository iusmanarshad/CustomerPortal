<?php

namespace Database\Seeders;

use App\Models\ClientQuestionnaire;
use App\Models\Question;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert multiple users using a loop or other logic
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'role_id' => $i == 0 ? 1 : 2,
                'first_name' => $i == 0 ? 'Admin' : 'Client',
                'last_name' => $i == 0 ? null : $i,
                'owner_name' => $i == 0 ? null : 'Drumm Law',
                'email' => $i == 0 ? 'admin@drummlaw.com' :  'client' . ($i + 1) . '@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        $users = User::where('role_id', 2)->get();
        $firstNameQuestion = Question::where('key', 'first_name')->first() ?? null;
        $lastNameQuestion = Question::where('key', 'last_name')->first() ?? null;
        $emailQuestion = Question::where('key', 'email')->first() ?? null;
        foreach ($users as $key => $user) {

            ClientQuestionnaire::updateOrCreate([
                'client_id' => $user->id,
                'question_id' => $firstNameQuestion->id,
            ], [
                'client_id' => $user->id,
                'question_id' => $firstNameQuestion->id,
                'answer' => $user->first_name,
            ]);
            ClientQuestionnaire::updateOrCreate([
                'client_id' => $user->id,
                'question_id' => $lastNameQuestion->id,
            ], [
                'client_id' => $user->id,
                'question_id' => $lastNameQuestion->id,
                'answer' => $user->last_name,
            ]);
            ClientQuestionnaire::updateOrCreate([
                'client_id' => $user->id,
                'question_id' => $emailQuestion->id,
            ], [
                'client_id' => $user->id,
                'question_id' => $emailQuestion->id,
                'answer' => $user->email,
            ]);
        }

    }
}
