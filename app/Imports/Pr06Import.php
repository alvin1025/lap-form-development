<?php

namespace App\Imports;

use App\Models\Pr06;
use Maatwebsite\Excel\Concerns\ToModel;

class Pr06Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pr06([
            'coll' => $row[0],
            'pricegrp' => $row[1],
            'serno' => $row[2],
            'article' => $row[3],
            'surkd' => $row[4],
            'surcharge_no' => $row[5],
            'surch_red' => $row[6],
        ]);
    }
}
