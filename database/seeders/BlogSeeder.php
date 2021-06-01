<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Sdg;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory()->count(50)->create();

        $sdgs = Sdg::all();

        Blog::all()->each(function ($blog) use ($sdgs) {
            $blog->sdgs()->attach(
                $sdgs->random(1)->pluck('id')->toArray()
            );
        });
    }
}
