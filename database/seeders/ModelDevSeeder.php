<?php

namespace Database\Seeders;

use App\Models\DevModel;
use Illuminate\Database\Seeder;

class ModelDevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DevModel::create([
            'lead_time' => 'A',
            'total_time' => '27'
        ]);
        DevModel::create([
            'lead_time' => 'B',
            'total_time' => '34'
        ]);
        DevModel::create([
            'lead_time' => 'C',
            'total_time' => '50'
        ]);
        DevModel::create([
            'lead_time' => 'D',
            'total_time' => '20'
        ]);
        DevModel::create([
            'lead_time' => 'E',
            'total_time' => '17'
        ]);
        DevModel::create([
            'lead_time' => 'F',
            'total_time' => '10'
        ]);
        DevModel::create([
            'lead_time' => 'G',
            'total_time' => '40'
        ]);
        DevModel::create([
            'lead_time' => 'H',
            'total_time' => '10'
        ]);
    }
}
