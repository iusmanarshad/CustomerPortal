<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '=',  'admin@admin.com')->first();

        if (!$user) {
            User::create([
                'role_id' => RoleEnum::ADMINROLE,
                'first_name' => 'Admin',
                'email' => 'admin@drummlaw.com',
                'password' => bcrypt('6rumml@w'),
                'status' => 'active',
                'email_verified_at' => Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
