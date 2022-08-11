<?php

namespace App\Imports;

use App\Models\CaraPembayaran;
use Maatwebsite\Excel\Concerns\ToModel;

class CaraPembayaranImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new CaraPembayaran([
            'cara_pembayaran' => $row[0],
            'description' => $row[1],
        ]);
    }
}
