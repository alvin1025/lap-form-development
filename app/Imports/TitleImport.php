<?php

namespace App\Imports;

use App\Models\Tittle;
use Maatwebsite\Excel\Concerns\ToModel;

class TitleImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Tittle([
            'title' => $row[0],
            'description' => $row[1],
        ]);
    }
}
