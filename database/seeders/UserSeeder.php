<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Joeri',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('admin12345'),
            'admin' => true
        ]);
    }
}