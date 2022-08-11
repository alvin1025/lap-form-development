<?php

namespace App\Imports;

use App\Models\BizType;
use Maatwebsite\Excel\Concerns\ToModel;

class BizImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BizType([
            'biz_type' => $row[0],
            'description' => $row[1]
        ]);
    }
}
