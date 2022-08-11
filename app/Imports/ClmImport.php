<?php

namespace App\Imports;

use App\Models\ClmAsi;
use Maatwebsite\Excel\Concerns\ToModel;

class ClmImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ClmAsi([
            'clmasi' => $row[0],
            'description' => $row[1],
        ]);
    }
}
