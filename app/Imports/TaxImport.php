<?php

namespace App\Imports;

use App\Models\Tax;
use Maatwebsite\Excel\Concerns\ToModel;

class TaxImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Tax([
            'tax' => $row[0],
            'description' => $row[1],
        ]);
    }
}
