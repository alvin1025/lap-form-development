<?php

namespace App\Imports;

use App\Models\Kd05;
use Maatwebsite\Excel\Concerns\ToModel;

class Kd05Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kd05([
            'no_cust1' => $row[0],
            'addresscode1' => $row[1],
            'title1' => $row[2],
            'kd5negara1' => $row[3],
            'kode_county1' => $row[4],
            'kota1' => $row[5],
            'email1' => $row[6],
            'telp1' => $row[7],
            'npwp1' => $row[8],
            'short_name1' => $row[9],
            'nama11' => $row[10],
            'nama21' => $row[11],
            'street1' => $row[12],
            'addit1' => $row[13],
            'postal_code1' => $row[14],
            'po_box1' => $row[15],
            'tax1' => $row[16],
            'mobile1' => $row[17],
            'home1' => $row[18],
            'fax1' => $row[19],
        ]);
    }
}
