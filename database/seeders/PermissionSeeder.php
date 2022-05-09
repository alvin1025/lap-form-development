<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //All Permission
        $permissions = [
            'permohonan_promosi_access',
            'permohonan_promosi_create',
            'permohonan_promosi_show',
            'permohonan_promosi_edit',
            'permohonan_promosi_delete',
        ];
        //create All Permission
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
        //hr Permission
        $hrPermisions = [
            'permohonan_promosi_access',
            'permohonan_promosi_create',
            'permohonan_promosi_show',
            'permohonan_promosi_edit',
            'permohonan_promosi_delete',
        ];
        //assignPermissionTo Hr
        $role = Role::findOrFail(12);
        foreach ($hrPermisions as $permission) {
            $role->givePermissionTo($permission);
        }
    }
}
