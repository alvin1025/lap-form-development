<?php

namespace App\Imports;

use App\Models\PaymentKind;
use App\Models\PaymetKind;
use Maatwebsite\Excel\Concerns\ToModel;

class PaymentKindImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PaymetKind([
            'key' => $row[0],
            'description' => $row[1]
        ]);
    }
}
