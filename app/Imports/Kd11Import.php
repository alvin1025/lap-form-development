<?php

namespace App\Imports;

use App\Models\Kd11;
use Maatwebsite\Excel\Concerns\ToModel;

class Kd11Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kd11([
            'kd11no_cust' => $row[0],
            'sd1' => $row[1],
            'sg1' => $row[2],
            'association_no1' => $row[3],
            'status1' => $row[4],
            'validity_from1' => $row[5],
            'validity_to1' => $row[6],
            'central_regu1' => $row[7],
            'conditions1' => $row[8],
        ]);
    }
}
