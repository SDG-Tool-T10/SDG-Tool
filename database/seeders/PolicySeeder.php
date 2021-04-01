<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Policy;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('policies')->insert([
            'name' => 'Accountancy Associate degree',
        ]);
        DB::table('policies')->insert([
            'name' => 'Aquacultuur',
        ]);
        DB::table('policies')->insert([
            'name' => 'Bedrijfskunde',
        ]);
        DB::table('policies')->insert([
            'name' => 'Bedrijfskunde Associate degree',
        ]);
        DB::table('policies')->insert([
            'name' => 'Bedeleiden bij Rouw en Verlies',
        ]);
        DB::table('policies')->insert([
            'name' => 'Bouwkunde',
        ]);
        DB::table('policies')->insert([
            'name' => 'Built Environment Associate degree',
        ]); 
    }
}
