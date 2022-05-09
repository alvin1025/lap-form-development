<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserRoleSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::all();
        $role = Role::findOrFail(12);
        $roleMkt = Role::findOrFail(10);

        $users->each(function ($user) use ($role, $roleMkt) {
            if ($user->division == 'HR & GA HO' || $user->division == 'HR FACTORY') {

                $user->assignRole($role->name);
            } elseif ($user->division == 'MARKETING') {

                $user->assignRole($roleMkt->name);
            }
        });
    }
}
