<?php

namespace App\Imports;

use App\Models\Kd06;
use Maatwebsite\Excel\Concerns\ToModel;

class Kd06Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kd06([
            'kd6no_cust' => $row[0],
            'sd' => $row[1],
            'kd6sg' => $row[2],
            'biz_type_p1' => $row[3],
            'nama_agent1' => $row[4],
            'allowance_qty' => $row[5],
            'kd6tax' => $row[6],
            'del_con' => $row[7],
            'payterm' => $row[8],
            'kurs' => $row[9],
            'satuan' => $row[10],
            'sales' => $row[11],
            'status' => $row[12],
            'from' => $row[13],
            'to' => $row[14],
            'pc' => $row[15],
            'print' => $row[16],
        ]);
    }
}
