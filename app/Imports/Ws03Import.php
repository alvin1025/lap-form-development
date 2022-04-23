<?php

namespace App\Imports;

use App\Models\MasterDevReportQard;
use App\Models\Ws03;
use Maatwebsite\Excel\Concerns\ToModel;

class Ws03Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    // protected function formatData($date)
    // {
    //     if (gettype($date) === 'double') {
    //         $dateFormat =
    //             \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($date);
    //         return $dateFormat->format('d.m.y');
    //     }

    //     return $date;
    // }


    public function model(array $row)
    {
        $qard = MasterDevReportQard::all();
        $qard = new MasterDevReportQard();
        $qard->ws03_id = $row[0];
        $qard->save();
        $user = auth()->user();
        // dd($row);
        return new Ws03([
            'cust_no' => $row[1],
            'customer' => $row[2],
            'article_no_desc' => $row[3],
            'va' => $row[4],
            'substrat' => $row[5],
            'lgth_ch' => $row[6],
            'f' => $row[7],
            'comment' => $row[8],
            'article_descrip' => $row[9],
            't_wd' => $row[10],
            'g_rmt' => $row[11],
            'g_sqm' => $row[12],
            'tcwa' => $row[13],
            'tcwe' => $row[14],
            'supplier' => $row[15],
            'new_entr' => $row[16],
            'new_date' => $row[17],
            'no_2' => $row[18],
            'prpla_article' => $row[19],
            'none1' => $row[20],
            'material' => $row[21],
            'finish' => $row[22],
            'from_greige' => $row[23],
            'order' => $row[24],
            'ord_date' => $row[25],
            'none2' => $row[26],
            'sample' => $row[27],
            'mod_user' => $row[28],
            'mod_date' => $row[29],
            'weave_repeat_ke' => $row[30],
            'reedin' => $row[31],
            'prodstar' => $row[32],
            'prodend' => $row[33],
            's' => $row[34],
            'no_3' => $row[35],
            'user_id' => $user->id,
        ]);
    }
}
