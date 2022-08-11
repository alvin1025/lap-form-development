<?php

namespace App\Imports;

use App\Models\Sg;
use Maatwebsite\Excel\Concerns\ToModel;

class SgImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sg([
            'sg' => $row[0],
            'description' => $row[1],
        ]);
    }
}
