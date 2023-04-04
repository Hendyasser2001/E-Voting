<?php

namespace Database\Seeders;

use App\Models\Election;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d');
        Election::create([
            'name' => 'Presidential elections',
            'startin' => $date,
            'endat' => date('Y-m-d', strtotime($date. ' + 30` days')),
        ]);
    }
}
