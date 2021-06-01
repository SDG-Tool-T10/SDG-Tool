<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Activity;
use App\Models\BusinessOperation;
use App\Models\Sdg;
use App\Models\Program;
use App\Models\User;

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
            ProgramSeeder::class,
            UserSeeder::class,
            ResearchGroupSeeder::class
        ]);
    }
}
