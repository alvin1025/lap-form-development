<?php

namespace App\Imports;

use App\Models\DelCon;
use Maatwebsite\Excel\Concerns\ToModel;

class DelconImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DelCon([
            'del_con' => $row[0],
            'description' => $row[1]
        ]);
    }
}
