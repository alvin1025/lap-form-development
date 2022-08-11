<?php

namespace App\Imports;

use App\Models\AgentKind;
use Maatwebsite\Excel\Concerns\ToModel;

class AgentKindImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AgentKind([
            'key' => $row[0],
            'description' => $row[1]
        ]);
    }
}
