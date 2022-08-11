<?php

namespace App\Imports;

use App\Models\Negara;
use Maatwebsite\Excel\Concerns\ToModel;

class NegaraImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Negara([
            'kode_negara' => $row[0],
            'nama_negara' => $row[1],
        ]);
    }
}
