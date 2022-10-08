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
            1 => 
            array (
                'id' => 2,
                'name' => NULL,
                'handle' => 'getx',
                'avatar' => NULL,
                'email' => 'erfan.siam16@gmail.com',
                'website' => NULL,
                'company' => NULL,
                'institution' => NULL,
                'grad_year' => NULL,
                'location' => NULL,
                'last_seen' => NULL,
                'default_lang' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$5qrSO9Fv/zoW8pW4ckk1K.MAItKORqZ0TLa6L/89ABNQUEVGP0o.G',
                'remember_token' => NULL,
                'created_at' => '2022-09-30 09:28:08',
                'updated_at' => '2022-09-30 09:28:08',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Emran Ahmed Murad',
                'handle' => 'Emran_Ahmed',
                'avatar' => NULL,
                'email' => 'emran.murad98@gmail.com',
                'website' => NULL,
                'company' => 'Freon Devs.',
                'institution' => 'SBRCS',
                'grad_year' => '2022',
                'location' => 'Dhaka',
                'last_seen' => NULL,
                'default_lang' => 50,
                'email_verified_at' => NULL,
                'password' => '$2y$10$AJ5w2phs0z2F.Shp1Z7XMOh2xnUszfZVpNhmmD15VF0hXUISS8CYa',
                'remember_token' => 'f5angAYtgwwNwJzcxfwakE7ThslfWURFvpq3ozq7DXiRsc7OsH1cNJC63BFX',
                'created_at' => '2022-09-30 11:20:18',
                'updated_at' => '2022-09-30 11:25:47',
            ),
        ));
        
        
    }
}