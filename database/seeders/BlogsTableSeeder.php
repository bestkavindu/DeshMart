<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '10 Tips to Extend Your Phone Battery Life',
                'img' => 'blogs/01KDR3X2RY3H2S49QYT2B7RJ12.jpg',
                'content' => '<p>A smartphone battery that drains too quickly can be frustrating, especially when you rely on your device throughout the day. Extending your phone’s battery life doesn’t always require expensive accessories or technical expertise—small habit changes can make a big difference.</p><p>From adjusting screen brightness and managing background apps to optimizing charging practices, there are many simple ways to conserve power. Understanding how your phone uses energy helps you avoid unnecessary battery drain and maintain long-term battery health. I</p><p>n this blog, we’ll share 10 practical and easy-to-follow tips that can help your phone last longer on a single charge, keeping you connected, productive, and stress-free wherever you go.</p>',
                'is_featured' => 1,
                'is_published' => 1,
                'created_at' => '2025-12-30 15:55:52',
                'updated_at' => '2025-12-30 17:11:45',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Essential Laptop Maintenance Guide for 2025',
                'img' => 'blogs/01KDR3SVR067NBT9YP8YZEZEYB.jpeg',
                'content' => '<p>Keeping your laptop in top condition is essential in 2025, as we rely more than ever on our devices for work, learning, and everyday tasks. Regular maintenance not only improves performance but also helps extend the lifespan of your laptop. Simple actions like cleaning hardware, updating software, and managing storage can prevent common issues before they become serious problems.</p><p>Modern laptops run powerful applications that demand more system resources, making maintenance even more important. Optimizing startup programs, protecting your device from malware, and monitoring battery health can significantly enhance speed and reliability. These steps ensure your laptop runs smoothly, even under heavy use.</p><p>In this guide, we’ll cover essential laptop maintenance tips that are easy to follow and effective. Whether you’re a student, professional, or casual user, these best practices will help keep your laptop fast, secure, and dependable throughout 2025 and beyond.</p>',
                'is_featured' => 1,
                'is_published' => 1,
                'created_at' => '2025-12-30 15:57:19',
                'updated_at' => '2025-12-30 17:10:01',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Choosing the Right Screen Protector for Your Device',
                'img' => 'blogs/01KDR3VFQCFTEYDR0EK3TBVYC7.jpeg',
                'content' => '<p>Protecting your device’s screen is essential, especially as modern displays become more advanced and expensive to repair. A good screen protector helps prevent scratches, cracks, and smudges while maintaining touch sensitivity and visual clarity. Choosing the right one can make a noticeable difference in how your device looks and feels during daily use.</p><p>With many options available—such as tempered glass, privacy protectors, and plastic films—it’s important to understand what suits your needs. Factors like durability, thickness, transparency, and added features all play a role in making the best choice. The wrong protector can reduce visibility or responsiveness.</p><p>In this blog, we’ll guide you through the different types of screen protectors and their benefits. By the end, you’ll know how to select the ideal screen protector that offers the best balance of protection, comfort, and performance for your device.</p>',
                'is_featured' => 1,
                'is_published' => 1,
                'created_at' => '2025-12-30 15:58:29',
                'updated_at' => '2025-12-30 17:10:53',
            ),
        ));
        
        
    }
}