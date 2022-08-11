<?php

namespace App\Imports;

use App\Models\CreditLimit;
use Maatwebsite\Excel\Concerns\ToModel;

class CreditLimitImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new CreditLimit([
            'credit_limit' => $row[0],
            'description' => $row[1],
        ]);
    }
}
