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
                'updated_at' => '2025-12-31 05:42:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'DMLR MADHUSANKA',
                'content' => 'I’m very happy with the phone repair service from Desha E-Mart. The work was done quickly, professionally, and at a reasonable price. Staff were polite and helpful, and communication was clear from start to finish. Highly recommend!
',
                'rating' => 5,
                'user_img' => NULL,
                'is_featured' => 0,
                'status' => 1,
                'created_at' => '2025-12-31 05:39:59',
                'updated_at' => '2025-12-31 05:39:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ishara Attanayake95',
                'content' => 'Excellent and quick service! Got my display fixed perfectly. Really impressed with the professionalism and quality. Highly recommend!',
                'rating' => 5,
                'user_img' => 'reviews/01KDSEWRYA0MFZNEZ94KAHAQ30.png',
                'is_featured' => 0,
                'status' => 1,
                'created_at' => '2025-12-31 05:43:04',
                'updated_at' => '2025-12-31 05:43:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Yuresha Kurukulasooriya',
                'content' => 'Hello Desha E-Mart Team,
Today my phone repaired from you, and I wanted to thank you for the excellent service provided. My phone had charger issues, and I was pleasantly surprised to have the charger replaced for free as part of the repair.The service was quick and efficient, and I appreciate that.
Thank you for your great work! I am very satisfied with the service and will definitely recommend Desha E-Mart to my friends.',
                'rating' => 5,
                'user_img' => 'reviews/01KDSEYWTQ65XSJ20QJBD69JF9.png',
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:44:13',
                'updated_at' => '2025-12-31 05:44:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Lahiru Dilshan',
                'content' => 'They just fixed my charging port and replaced the display within few minutes, awesome customer service and super duper friendly guy.
Highly recommend to anyone.',
                'rating' => 5,
                'user_img' => NULL,
                'is_featured' => 0,
                'status' => 1,
                'created_at' => '2025-12-31 05:44:55',
                'updated_at' => '2025-12-31 05:44:55',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'sandeepa wickramarathna',
                'content' => 'I recently visited this mobile shop, and I was really impressed! He is friendly and very knowledgeable. No matter what problem I had with my laptop, he quickly found a solution. They helped me find and order a charger for my laptop, and it was delivered successfully. He service is excellent.

I believe this is a trustworthy place to repair a laptop or phone with confidence. They also provide great customer service.

He handled everything with ease. The service was fast, and the prices were fair. If you need help with your mobile device or laptop, I highly recommend this shop. He truly know how to solve every problem!',
                'rating' => 5,
                'user_img' => NULL,
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:45:38',
                'updated_at' => '2025-12-31 05:45:38',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Sisuri Perera',
                'content' => 'Great service! They fixed my water-damaged laptop and provided very friendly support. Highly recommend.',
                'rating' => 5,
                'user_img' => NULL,
                'is_featured' => 0,
                'status' => 1,
                'created_at' => '2025-12-31 05:46:04',
                'updated_at' => '2025-12-31 05:46:04',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Sajini Senarathne',
                'content' => 'I recently repaired my phone at this mobile shop, and I am extremely pleased with the service I received. The glass of my phone was damaged, and the display required replacement. They not only provided a high-quality repair but also ensured the service was completed at an affordable price within a short period of time. The attention to detail and the quality of the materials used in the repair exceeded my expectations. My phone now looks and functions as good as new. Thank you for your excellent service. I will definitely recommend you to others in need of phone repair services.
',
                'rating' => 5,
                'user_img' => 'reviews/01KDSF3S7S7715VEH5FGTR640Y.png',
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:46:54',
                'updated_at' => '2025-12-31 05:46:54',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Yasiru Dilanka',
                'content' => 'Excellent and fast repair. Also, good and friendly customer service.Fixed the motherboard issue at the right time.Highly recommended.',
                'rating' => 5,
                'user_img' => 'reviews/01KDSF5S35WE3R7AZAP70WW0KX.png',
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:47:59',
                'updated_at' => '2025-12-31 05:47:59',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dilmi Nishadi',
                'content' => 'I recently had my AirPods repaired at this mobile shop, and I’m extremely satisfied with their service. The repair was done quickly and with excellent quality. On top of that, the price was very reasonable compared to other places. Highly recommend this shop for anyone looking for reliable and affordable mobile or gadget repairs!',
                'rating' => 5,
                'user_img' => 'reviews/01KDSF728XA3WK73DJ266DZEGC.png',
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:48:41',
                'updated_at' => '2025-12-31 05:48:41',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => ' Harindu Kaushalya',
                'content' => 'I recently visited this mobile shop, and I was really impressed! He was friendly and very knowledgeable. No matter what problem I had with my phone, they quickly found a solution. He handled everything with ease. The service was fast, and the prices were fair. If you need help with your mobile device, I highly recommend this shop. They truly know how to solve every problem!
',
                'rating' => 5,
                'user_img' => 'reviews/01KDSF92H9DQ980GDCBQ4SNJSP.png',
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:49:47',
                'updated_at' => '2025-12-31 05:49:47',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ishan Weerasinha',
                'content' => 'Desha E- Mart is the best place to repair any electronics items.And also he is the best faithful and trustworthy person I have ever seen..Highly recommended..Thanks a lot for your service for me..❤️',
                'rating' => 5,
                'user_img' => 'reviews/01KDSFB3E97R9YAN57T3B4RRRC.png',
                'is_featured' => 1,
                'status' => 1,
                'created_at' => '2025-12-31 05:50:53',
                'updated_at' => '2025-12-31 05:50:53',
            ),
        ));
        
        
    }
}