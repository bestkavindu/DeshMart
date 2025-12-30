<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_categories')->delete();
        
        \DB::table('blog_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mobile ',
                'slug' => 'mobile',
                'color' => 'bg-purple-600',
                'created_at' => '2025-12-30 17:30:40',
                'updated_at' => '2025-12-30 17:30:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Laptop',
                'slug' => 'laptop',
                'color' => 'bg-green-200',
                'created_at' => '2025-12-30 17:31:01',
                'updated_at' => '2025-12-30 17:31:01',
            ),
        ));
        
        
    }
}