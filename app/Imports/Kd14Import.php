<?php

namespace App\Imports;

use App\Models\Kd14;
use Maatwebsite\Excel\Concerns\ToModel;

class Kd14Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kd14([
            'kd14no_cust' => $row[0],
            'nama_cp1' => $row[1],
            'phone_cp1' => $row[2],
            'email_cp1' => $row[3],
            'sd_cp1' => $row[4],
            'sg_cp1' => $row[5],
            'function_cp1' => $row[6],
            'sinc_cp1' => $row[7],
            'add_addr_cp1' => $row[8],
            'mobile_cp1' => $row[9],
            'cp1' => $row[10],
        ]);
    }
}
