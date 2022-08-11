<?php

namespace App\Imports;

use App\Models\SurchargeType;
use Maatwebsite\Excel\Concerns\ToModel;

class SurchargeTypeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SurchargeType([
            //
        ]);
    }
}
