<?php

namespace App\Imports;

use App\Models\KodeCountry;
use Maatwebsite\Excel\Concerns\ToModel;

class KodeCountyImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new KodeCountry([
            'kode_county' => $row[0],
            'description' => $row[1],
            'value' => $row[2]
        ]);
    }
}
