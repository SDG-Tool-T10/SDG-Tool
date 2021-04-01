<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class SdgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sdgs')->insert([
            'name' => 'No poverty',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-01.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Zero hunger',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-02.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Good health and well-being',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-03.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Quality education',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-04.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Gender equality',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-05.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Clean water and sanitation',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-06.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Affordable and clean energy',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-07.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Decent work and economic growth',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-08.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Industry, Innovation and Infrastructure',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-09.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Reduced inequalities',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-10.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Sustainable cities and communities',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-11.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Responsible consumption and production',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-12.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Climate action',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-13.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Life below water',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-14.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Life on land',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-15.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Peace, Justice and strong institutions',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-16.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Partnerships for the goals',
            'img_link' => 'public/image/SDG-Icons-EN/sdg-en-17.png'
        ]);
    }
    
}
