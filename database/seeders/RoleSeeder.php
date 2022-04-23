<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'sales',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'marketing',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'qard',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'bci',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'weaving',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);
    }
}