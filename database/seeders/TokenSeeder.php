<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $token = [
            [
                
                'id' => '1',
                'golongan' => 'R-1/TR',
                'voltase' => '0-450 VA',
                'biaya/kWh' => '169',
            ],
            [
                
                'id' => '2',
                'golongan' => 'R-1/TR',
                'voltase' => '451-900 VA',
                'biaya/kWh' => '274',
            ],
            [
                
                'id' => '3',
                'golongan' => 'R-1M/TR',
                'voltase' => '451-900 VA',
                'biaya/kWh' => '1352',
            ],
            [
                
                'id' => '4',
                'golongan' => 'R-1/TR',
                'voltase' => '901-1300 VA',
                'biaya/kWh' => '1444',
            ],
            [
                
                'id' => '5',
                'golongan' => 'R-1/TR',
                'voltase' => '1.301-2.200 VA',
                'biaya/kWh' => '1444',
            ],
        ];
        foreach ($token as $tkn){
            \App\Models\token::firstOrCreate($tkn);
        }
    }
}
