<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Shankar Mahendran',
                'content' => 'Highly recommended ✨♥️.
They replaced my Pixel 6a display quickly and handled everything very professionally. He was very friendly, honest, and provided excellent customer service throughout the process. I’m really satisfied with their support and would definitely go back for any future repairs or purchases.',
                'rating' => 5,
                'user_img' => 'reviews/01KDSE3WEM17E9A7P9Z0SD3CNE.png',
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:29:28',
                'updated_at' => '2025-12-31 05:29:28',
            ),
        ));
        
        
    }
}