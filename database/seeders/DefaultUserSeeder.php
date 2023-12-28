<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
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
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'role_id' => RoleEnum::ADMINROLE,
            ]);
        }
    }
}
