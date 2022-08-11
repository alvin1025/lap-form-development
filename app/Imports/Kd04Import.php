<?php

namespace App\Imports;

use App\Models\Kd04;
use Maatwebsite\Excel\Concerns\ToModel;

class Kd04Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kd04([
            'kd4no_cust' => $row[0],
            'no_debitor' => $row[1],
            'no_creditor' => $row[2],
            'no_group_cust' => $row[3],
            'credit_cust' => $row[4],
            'credit_from' => $row[5],
            'credit_to' => $row[6],
            'credit_line_check' => $row[7],
            'block_delivery' => $row[8],
            'block' => $row[9],
            'block_reason' => $row[10],
        ]);
    }
}
