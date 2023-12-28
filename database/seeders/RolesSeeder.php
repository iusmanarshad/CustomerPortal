<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([
            'name' => 'admin'
        ], [
            'name' => 'admin'
        ]);

        Role::updateOrCreate([
            'name' => 'client'
        ], [
            'name' => 'client'
        ]);
        Role::updateOrCreate([
            'name' => 'associate'
        ], [
            'name' => 'associate'
        ]);
    }
}
