<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => '2025-12-30 08:16:21',
                'password' => '$2y$12$FUI8CsoTp10Rbz66WXhbMu7rHLQ1z1pD1jKamawj2QvqarxdqV5Ry',
                'remember_token' => 'rf3EEiVtU5',
                'created_at' => '2025-12-30 08:16:21',
                'updated_at' => '2025-12-30 08:16:21',
                'two_factor_secret' => 'rnanVYCyvu',
                'two_factor_recovery_codes' => 'EAG2o5ZNbb',
                'two_factor_confirmed_at' => '2025-12-30 08:16:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'email' => 'bestkavindu@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$JnIpz4g/FbZhcQ2EabHf2OIrjKKyM96NFJFv1tSiAoSTjHEmHhbz2',
                'remember_token' => NULL,
                'created_at' => '2025-12-30 08:18:40',
                'updated_at' => '2025-12-30 08:18:40',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
        ));
        
        
    }
}