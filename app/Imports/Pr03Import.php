<?php

namespace App\Imports;

use App\Models\Pr03;
use Maatwebsite\Excel\Concerns\ToModel;

class Pr03Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        // dd($row);
        return new Pr03([
            'coll' => $row[0],
            'pricegrp' => $row[1],
            'serno' => $row[2],
            'validity_from' => $row[3],
            'up_to' => $row[4],
            'resp' => $row[5],
            'currency' => $row[6],
            'rate1' => $row[7],
            'rate2' => $row[8],
            'price_unit' => $row[9],
            'min_qty_surcharge' => $row[10],
            'upto_qty_surcharge' => $row[11],
            'qu' => $row[12],
        ]);
    }
}
