<?php

namespace App\Imports;

use App\Models\Vs04;
use Maatwebsite\Excel\Concerns\ToModel;

class VS04import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Vs04([
            'agent' => $row[1],
            'cust' => $row[2],
            'sd' => $row[3],
            'fr' => $row[4],
            'qu' => $row[5],
            'ctype' => $row[6],
            'qg' => $row[7],
            'from_quantity' => $row[8],
            'allow' => $row[9],
            'value' => $row[10],
        ]);
    }
}
