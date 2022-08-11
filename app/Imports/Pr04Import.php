<?php

namespace App\Imports;

use App\Models\Pr04;
use Maatwebsite\Excel\Concerns\ToModel;

class Pr04Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pr04([
            'coll' => $row[0],
            'pricegrp' => $row[1],
            'serno' => $row[2],
            'article' => $row[3],
            'tariff_code' => $row[4],
            'tariff_quantity' => $row[5],
            'price' => $row[6],
            'surcharge_type' => $row[7],
            'surcharge' => $row[8],
        ]);
    }
}
