<?php

namespace App\Imports;

use App\Models\Agent;
use Maatwebsite\Excel\Concerns\ToModel;

class AgentImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Agent([
            'agent' => $row[0],
            'language' => $row[1],
            'title' => $row[2],
            'shortname' => $row[3],
            'status' => $row[4],
            'agent_kind' => $row[5],
            'name1' => $row[6],
            'name2' => $row[7],
            'addit' => $row[8],
            'street' => $row[9],
            'cocd' => $row[10],
            'cty' => $row[11],
            'pobox' => $row[12],
            'phone' => $row[13],
            'email' => $row[14],
            'mobile' => $row[15],
            'home' => $row[16],
            'fax' => $row[17],
            'kurs' => $row[18],
        ]);
    }
}
