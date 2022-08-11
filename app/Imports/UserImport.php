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
        // dd($row);
        return new User([
            'employee_name' => $row[0],
            'employee_no' => $row[1],
            'position_job_name' => $row[2],
            'jabatan' => $row[3],
            'job_code' => $row[4],
            'work_location' => $row[5],
            'employee_status' => $row[6],
            'division' => $row[7],
            'email' => $row[8],
            'password' => Hash::make($row[9]),
        ]);
    }
}
