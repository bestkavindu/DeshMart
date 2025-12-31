<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewMetaDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('review_meta_data')->delete();
        
        \DB::table('review_meta_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'review_count' => '100',
                'average_rating' => '5',
                'years_experience' => '5',
                'repairs_done' => '10000',
                'created_at' => '2025-12-31 07:50:40',
                'updated_at' => '2025-12-31 07:50:40',
            ),
        ));
        
        
    }
}