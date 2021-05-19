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
            'alt_title' => 'End poverty in all its forms everywhere',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-01.png',
            'alt_img' => 'image/SDG-Icons-ALT/1.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Zero hunger',
            'alt_title' => 'End hunger, achieve food security and improved nutrition and promote sustainable agriculture',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-02.png',
            'alt_img' => 'image/SDG-Icons-ALT/2.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Good health and well-being',
            'alt_title' => 'Ensure healthy lives and promote well-being for all at all ages',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-03.png',
            'alt_img' => 'image/SDG-Icons-ALT/3.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Quality education',
            'alt_title' => 'Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-04.png',
            'alt_img' => 'image/SDG-Icons-ALT/4.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Gender equality',
            'alt_title' => 'Achieve gender equality and empower all women and girls',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-05.png',
            'alt_img' => 'image/SDG-Icons-ALT/5.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Clean water and sanitation',
            'alt_title' => 'Ensure availability and sustainable management of water and sanitation for all',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-06.png',
            'alt_img' => 'image/SDG-Icons-ALT/6.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Affordable and clean energy',
            'alt_title' => 'Ensure access to affordable, reliable, sustainable and modern energy for all',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-07.png',
            'alt_img' => 'image/SDG-Icons-ALT/7.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Decent work and economic growth',
            'alt_title' => 'Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-08.png',
            'alt_img' => 'image/SDG-Icons-ALT/8.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Industry, Innovation and Infrastructure',
            'alt_title' => 'Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-09.png',
            'alt_img' => 'image/SDG-Icons-ALT/9.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Reduced inequalities',
            'alt_title' => 'Reduce inequality within and among countries',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-10.png',
            'alt_img' => 'image/SDG-Icons-ALT/10.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Sustainable cities and communities',
            'alt_title' => 'Make cities and human settlements inclusive, safe, resilient and sustainable',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-11.png',
            'alt_img' => 'image/SDG-Icons-ALT/11.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Responsible consumption and production',
            'alt_title' => 'Ensure sustainable consumption and production patterns',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-12.png',
            'alt_img' => 'image/SDG-Icons-ALT/12.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Climate action',
            'alt_title' => 'Take urgent action to combat climate change and its impacts',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-13.png',
            'alt_img' => 'image/SDG-Icons-ALT/13.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Life below water',
            'alt_title' => 'Conserve and sustainably use the oceans, seas and marine resources for sustainable development',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-14.png',
            'alt_img' => 'image/SDG-Icons-ALT/14.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Life on land',
            'alt_title' => 'Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, and halt and reverse land degradation and halt biodiversity loss',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-15.png',
            'alt_img' => 'image/SDG-Icons-ALT/15.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Peace, Justice and strong institutions',
            'alt_title' => 'Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions at all levels',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-16.png',
            'alt_img' => 'image/SDG-Icons-ALT/16.png'
        ]);
        DB::table('sdgs')->insert([
            'name' => 'Partnerships for the goals',
            'alt_title' => 'Strengthen the means of implementation and revitalize the global partnership for sustainable development',
            'img_link' => 'image/SDG-Icons-EN/sdg-en-17.png',
            'alt_img' => 'image/SDG-Icons-ALT/17.png'
        ]);
    }
}
