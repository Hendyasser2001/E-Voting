<?php

namespace Database\Seeders;

use App\Models\Elected;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ElectedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Elected::create([
            'slug' => 'bird',
            'image' => asset('assets/images/OPAMA.jpg'),
            'user_id' => 1,
            'election_id' => 1
        ]);
    }
}
