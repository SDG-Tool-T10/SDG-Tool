<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'ICT',
        ]); 
        DB::table('courses')->insert([
            'name' => 'Civil Engineering',
        ]); 
        DB::table('courses')->insert([
            'name' => 'Social Work',
        ]); 
    }
}
