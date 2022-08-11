<?php

namespace App\Imports;

use App\Models\Assiociation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AssiociationImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new Assiociation([
            'title' => $row[0],
            'no_cust' => $row[1],
            'shortname' => $row[2],
            'name' => $row[3],
            'street' => $row[4],
            'additional' => $row[5],
            'tax' => $row[6],
            'postal' => $row[7],
            'country_code' => $row[8],
            'kota' => $row[9],
            'fax' => $row[10],
            'pobox' => $row[11],
            'email' => $row[12],
            'phone' => $row[13],
            'mobile' => $row[14],
            'assoc' => $row[15],
        ]);
    }
}
