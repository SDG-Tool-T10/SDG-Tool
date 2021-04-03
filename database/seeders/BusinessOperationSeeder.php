<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\BusinessOperation;

class BusinessOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_operations')->insert([
            'name' => 'Accountancy Associate degree',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Aquacultuur',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Bedrijfskunde',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Bedrijfskunde Associate degree',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Bedeleiden bij Rouw en Verlies',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Bouwkunde',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Built Environment Associate degree',
        ]); 
    }
}
