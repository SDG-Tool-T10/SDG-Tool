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
            'name' => 'Campus Facilities',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Finance',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'ICT',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Marketing, Communication and Internationalisation',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Education, Research & Quality',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'PO&O',
        ]);
        DB::table('business_operations')->insert([
            'name' => 'Student Facilities',
        ]);
    }
}
