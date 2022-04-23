<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Spatie\Permission\Traits\HasRoles;


class UserImport implements ToModel
{
    use HasRoles;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        
        return new User([
            'employee_no' => $row[1],
            'employee_name' => $row[2],
            'position_job_name' => $row[3],
            'email' => $row[4],
            'jabatan' => $row[5],
            'job_code' => $row[6],
            'work_location' => $row[7],
            'employee_status' => $row[8],
            'division' => $row[9],
            'password' => Hash::make($row[10]),
        ]);
    }
}
