<?php

namespace App\Imports;

use App\Models\MenueGroup;
use Maatwebsite\Excel\Concerns\ToModel;

class MenueGroupImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MenueGroup([
            'key' => $row[0],
            'description' => $row[1]
        ]);
    }
}
