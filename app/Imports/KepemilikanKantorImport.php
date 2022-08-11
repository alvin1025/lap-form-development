<?php

namespace App\Imports;

use App\Models\KepemilikanKantor;
use Maatwebsite\Excel\Concerns\ToModel;

class KepemilikanKantorImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new KepemilikanKantor([
            'kepemilikan_kantor' => $row[0],
            'description' => $row[1],
        ]);
    }
}
