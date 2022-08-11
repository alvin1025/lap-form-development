<?php

namespace App\Imports;

use App\Models\QuantityUnit;
use Maatwebsite\Excel\Concerns\ToModel;

class QuantityUnitImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new QuantityUnit([
            //
        ]);
    }
}
