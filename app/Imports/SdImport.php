<?php

namespace App\Imports;

use App\Models\Sd;
use Maatwebsite\Excel\Concerns\ToModel;

class SdImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sd([
            'sd' => $row[0],
            'description' => $row[1],
        ]);
    }
}
