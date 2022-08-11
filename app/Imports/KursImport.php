<?php

namespace App\Imports;

use App\Models\Kurs;
use Maatwebsite\Excel\Concerns\ToModel;

class KursImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Kurs([
            'kurs' => $row[0],
            'description' => $row[1],
        ]);
    }
}
