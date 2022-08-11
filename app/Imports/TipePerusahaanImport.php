<?php

namespace App\Imports;

use App\Models\TipePerusahaan;
use Maatwebsite\Excel\Concerns\ToModel;

class TipePerusahaanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new TipePerusahaan([
            'tipe_perusahaan' => $row[0],
            'description' => $row[1],
        ]);
    }
}
