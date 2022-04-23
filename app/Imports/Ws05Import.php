<?php

namespace App\Imports;

use App\Models\MasterDevReportQard;
use App\Models\Ws05;
use Maatwebsite\Excel\Concerns\ToModel;

class Ws05Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        $qard = MasterDevReportQard::all();
        $qard = new MasterDevReportQard();
        $qard->ws05_id = $row[0];
        $qard->save();
        $user = auth()->user();
        return new Ws05([
            'input_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1]),
            'pic' => $row[2],
            'article_greige' => $row[3],
            'greige_description' => $row[4],
            'composition' => $row[5],
            'article_finish' => $row[6],
            'variant' => $row[7],
            'customer' => $row[8],
            'standar_full_width_ws05' => $row[9],
            'finish_width_from' => $row[10],
            'finish_width_to' => $row[11],
            'fw_inc' => $row[12],
            'fw_label_inc' => $row[13],
            'greige_lusi' => $row[14],
            'greige_pakan' => $row[15],
            'greige_lebar' => $row[16],
            'greige_grm' => $row[17],
            'greige_gsm' => $row[18],
            'greige_ne_lusi' => $row[19],
            'greige_ne_pakan' => $row[20],
            'finish_identity_konstruksi_lusi' => $row[21],
            'finish_identity_konstruksi_pakan' => $row[22],
            'finish_identity_konstruksi_grmt' => $row[23],
            'finish_identity_konstruksi_gsqm' => $row[24],
            'status' => $row[25],
            'user_id' => $user->id,
        ]);
    }
}
