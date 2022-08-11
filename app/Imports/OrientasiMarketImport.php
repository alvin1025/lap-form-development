<?php

namespace App\Imports;

use App\Models\OrientasiMarket;
use Maatwebsite\Excel\Concerns\ToModel;

class OrientasiMarketImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new OrientasiMarket([
            'orientasi_market' => $row[0],
            'description' => $row[1],
        ]);
    }
}
