<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResearchGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('research_groups')->insert([
            'name' => 'Aquaculture in Delta Areas',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Biobased Bouwen',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Building With Nature',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Business Intelligence & Analytics',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Centre of Expertise Biobased Economy',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Centre of Expertise Leisure, Tourism and Hospitality',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Kenniscentrum Ondernemen en Innoveren',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Data Science',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Delta Academy Applied Research Centre',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Delta Platform',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Delta Power',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Expertise and Valorisation Management',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Healthy Region',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Inclusieve arbeidsmarkt',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Kenniscentrum Kusttoerisme',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Living Lab Water Indonesië',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Marine Biobased Specialities',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Onderwijsexcellentie',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Onderwijsexcellentie Voortgezet Onderwijs',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Resilient Deltas',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Supply Chain Innovation',
        ]);
        DB::table('research_groups')->insert([
            'name' => 'Water Technology'
        ]);
    }
}
