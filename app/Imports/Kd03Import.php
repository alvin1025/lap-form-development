<?php

namespace App\Imports;

use App\Models\Kd03;
use Maatwebsite\Excel\Concerns\ToModel;

class Kd03Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kd03([
            'class' => $row[0],
            'title' => $row[1],
            'no_cust' => $row[2],
            'negara' => $row[3],
            'kode_county' => $row[4],
            'kota' => $row[5],
            'email' => $row[6],
            'telp' => $row[7],
            'npwp' => $row[8],
            'short_name' => $row[9],
            'nama1' => $row[10],
            'nama2' => $row[11],
            'street' => $row[12],
            'addit' => $row[13],
            'postal_code' => $row[14],
            'po_box' => $row[15],
            'tax' => $row[16],
            'mobile' => $row[17],
            'home' => $row[18],
            'fax' => $row[19],
            'status' => $row[20],
            'kode_cust' => $row[21],
            'tanggal' => $row[22],
        ]);
    }
}
