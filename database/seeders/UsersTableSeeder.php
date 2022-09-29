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
                'name' => 'Erfan Ahmed Siam',
                'handle' => 'Ovicorsho',
                'avatar' => NULL,
                'email' => 'erfan.siam98@gmail.com',
                'website' => 'imerfan.com',
                'company' => 'Magic Office LTD',
                'institution' => 'Faridpur Engineering College',
                'grad_year' => '2024',
                'location' => 'Dhaka,Bangladesh',
                'last_seen' => '',
                'default_lang' => 71,
                'email_verified_at' => NULL,
                'password' => '$2y$10$jxC1zPR.JyUFb9lf7D//QeZDbWndTi1Ckg0/Uic3qNF3xZIE/z.3a',
                'remember_token' => NULL,
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
        ));
        
        
    }
}