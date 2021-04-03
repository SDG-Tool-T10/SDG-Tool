<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Activity;
use App\Models\BusinessOperation;
use App\Models\Sdg;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ActivitySeeder::class,
            BusinessOperationSeeder::class,
            SdgSeeder::class,
            CourseSeeder::class
        ]);
    }
}
