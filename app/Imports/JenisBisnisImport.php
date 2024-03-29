<?php

namespace App\Imports;

use App\Models\JenisBisnis;
use Maatwebsite\Excel\Concerns\ToModel;

class JenisBisnisImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new JenisBisnis([
            'jenis_bisnis' => $row[0],
            'description' => $row[1]
        ]);
    }
}
