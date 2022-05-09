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
        // Role::create([
        //     'name' => 'admin',
        //     'guard_name' => 'web'
        // ]);
        // Role::create([
        //     'name' => 'sales',
        //     'guard_name' => 'web'
        // ]);
        // Role::create([
        //     'name' => 'marketing',
        //     'guard_name' => 'web'
        // ]);
        // Role::create([
        //     'name' => 'qard',
        //     'guard_name' => 'web'
        // ]);
        // Role::create([
        //     'name' => 'bci',
        //     'guard_name' => 'web'
        // ]);
        // Role::create([
        //     'name' => 'weaving',
        //     'guard_name' => 'web'
        // ]);
        // Role::create([
        //     'name' => 'user',
        //     'guard_name' => 'web'
        // ]);
        // Role::create([
        //     'name' => 'admin-accounting',
        //     'guard_name' => 'web'
        // ]);
        $roles = [
            [
                'name' => 'super_admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'sales',
                'guard_name' => 'web'
            ],
            [
                'name' => 'marketing',
                'guard_name' => 'web'
            ],
            [
                'name' => 'qard',
                'guard_name' => 'web'
            ],
            [
                'name' => 'hr',
                'guard_name' => 'web'
            ],
            [
                'name' => 'ga',
                'guard_name' => 'web'
            ],
            [
                'name' => 'weaving',
                'guard_name' => 'web'
            ],
            [
                'name' => 'utility',
                'guard_name' => 'web'
            ],
            [
                'name' => 'it',
                'guard_name' => 'web'
            ],
            [
                'name' => 'mr',
                'guard_name' => 'web'
            ],
            [
                'name' => 'maintenance',
                'guard_name' => 'web'
            ],
            [
                'name' => 'purchasing',
                'guard_name' => 'web'
            ],
            [
                'name' => 'finishing',
                'guard_name' => 'web'
            ],
            [
                'name' => 'ppic',
                'guard_name' => 'web'
            ],
            [
                'name' => 'finance',
                'guard_name' => 'web'
            ],
            [
                'name' => 'accounting',
                'guard_name' => 'web'
            ],
            [
                'name' => 'capacity_planning',
                'guard_name' => 'web'
            ],
            [
                'name' => 'commerce_yarn',
                'guard_name' => 'web'
            ],
        ];
        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name'],
                'guard_name' => $role['guard_name']
            ]);
        }
    }
}
