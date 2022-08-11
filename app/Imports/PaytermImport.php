<?php

namespace App\Imports;

use App\Models\PayTerm;
use Maatwebsite\Excel\Concerns\ToModel;

class PaytermImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PayTerm([
            'pay_term' => $row[0],
            'description' => $row[1],
            'value' => $row[2],
        ]);
    }
}
