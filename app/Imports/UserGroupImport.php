<?php

namespace App\Imports;

use App\Models\UserGroup;
use Maatwebsite\Excel\Concerns\ToModel;

class UserGroupImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserGroup([
            'key' => $row[0],
            'description' => $row[1],
        ]);
    }
}
