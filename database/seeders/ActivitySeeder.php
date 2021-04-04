<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'name' => 'Class',
        ]);
        DB::table('activities')->insert([
            'name' => 'Minor',
        ]);
        DB::table('activities')->insert([
            'name' => 'Graduation Research',
        ]);
        DB::table('activities')->insert([
            'name' => 'Research Project',
        ]);
        DB::table('activities')->insert([
            'name' => 'Event',
        ]);
        DB::table('activities')->insert([
            'name' => 'Policy',
        ]);
        DB::table('activities')->insert([
            'name' => 'Business Operations',
        ]);
        DB::table('activities')->insert([
            'name' => 'Other',
        ]);
    }
}
