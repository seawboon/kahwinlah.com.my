<?php

use Illuminate\Database\Seeder;

class directoryCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directory_categories')->insert([
            'name' => 'General',
            'slug' => 'general',
            'header_image' => 'xnNGD5nWpWM9NTIO3tfPta0pznJJpMPCJlldbyei.png',
            'image' => 'xnNGD5nWpWM9NTIO3tfPta0pznJJpMPCJlldbyei.png',
            'is_published' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
