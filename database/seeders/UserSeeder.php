<?php

namespace Database\Seeders;

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
                'first_name' => $i == 0 ? null : $i,
                'owner_name' => $i == 0 ? null : 'Drumm Law',
                'email' => $i == 0 ? 'admin@drummlaw.com' :  'client' . ($i + 1) . '@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

    }
}
