<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Languages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Erfan Ahmed Siam',
            'email' => 'erfan.siam98@gmail.com',
            'handle'=> 'Ovicorsho',
            'website'=>'imerfan.com',
            'company'=>'Magic Office LTD',
            'institution'=>'Faridpur Engineering College',
            'grad_year'=>'2024',
            'Location'=>'Dhaka,Bangladesh',
            'last_seen'=>'',
            'default-lang'=>71,
            'password'=> Hash::make('12345678')
        ]);

        //Lanugage Database
        $lanugages = array (
            0 =>
            array (
              'id' => 45,
              'name' => 'Assembly (NASM 2.14.02)',
            ),
            1 =>
            array (
              'id' => 46,
              'name' => 'Bash (5.0.0)',
            ),
            2 =>
            array (
              'id' => 47,
              'name' => 'Basic (FBC 1.07.1)',
            ),
            3 =>
            array (
              'id' => 75,
              'name' => 'C (Clang 7.0.1)',
            ),
            4 =>
            array (
              'id' => 76,
              'name' => 'C++ (Clang 7.0.1)',
            ),
            5 =>
            array (
              'id' => 48,
              'name' => 'C (GCC 7.4.0)',
            ),
            6 =>
            array (
              'id' => 52,
              'name' => 'C++ (GCC 7.4.0)',
            ),
            7 =>
            array (
              'id' => 49,
              'name' => 'C (GCC 8.3.0)',
            ),
            8 =>
            array (
              'id' => 53,
              'name' => 'C++ (GCC 8.3.0)',
            ),
            9 =>
            array (
              'id' => 50,
              'name' => 'C (GCC 9.2.0)',
            ),
            10 =>
            array (
              'id' => 54,
              'name' => 'C++ (GCC 9.2.0)',
            ),
            11 =>
            array (
              'id' => 86,
              'name' => 'Clojure (1.10.1)',
            ),
            12 =>
            array (
              'id' => 51,
              'name' => 'C# (Mono 6.6.0.161)',
            ),
            13 =>
            array (
              'id' => 77,
              'name' => 'COBOL (GnuCOBOL 2.2)',
            ),
            14 =>
            array (
              'id' => 55,
              'name' => 'Common Lisp (SBCL 2.0.0)',
            ),
            15 =>
            array (
              'id' => 56,
              'name' => 'D (DMD 2.089.1)',
            ),
            16 =>
            array (
              'id' => 57,
              'name' => 'Elixir (1.9.4)',
            ),
            17 =>
            array (
              'id' => 58,
              'name' => 'Erlang (OTP 22.2)',
            ),
            18 =>
            array (
              'id' => 44,
              'name' => 'Executable',
            ),
            19 =>
            array (
              'id' => 87,
              'name' => 'F# (.NET Core SDK 3.1.202)',
            ),
            20 =>
            array (
              'id' => 59,
              'name' => 'Fortran (GFortran 9.2.0)',
            ),
            21 =>
            array (
              'id' => 60,
              'name' => 'Go (1.13.5)',
            ),
            22 =>
            array (
              'id' => 88,
              'name' => 'Groovy (3.0.3)',
            ),
            23 =>
            array (
              'id' => 61,
              'name' => 'Haskell (GHC 8.8.1)',
            ),
            24 =>
            array (
              'id' => 62,
              'name' => 'Java (OpenJDK 13.0.1)',
            ),
            25 =>
            array (
              'id' => 63,
              'name' => 'JavaScript (Node.js 12.14.0)',
            ),
            26 =>
            array (
              'id' => 78,
              'name' => 'Kotlin (1.3.70)',
            ),
            27 =>
            array (
              'id' => 64,
              'name' => 'Lua (5.3.5)',
            ),
            28 =>
            array (
              'id' => 89,
              'name' => 'Multi-file program',
            ),
            29 =>
            array (
              'id' => 79,
              'name' => 'Objective-C (Clang 7.0.1)',
            ),
            30 =>
            array (
              'id' => 65,
              'name' => 'OCaml (4.09.0)',
            ),
            31 =>
            array (
              'id' => 66,
              'name' => 'Octave (5.1.0)',
            ),
            32 =>
            array (
              'id' => 67,
              'name' => 'Pascal (FPC 3.0.4)',
            ),
            33 =>
            array (
              'id' => 85,
              'name' => 'Perl (5.28.1)',
            ),
            34 =>
            array (
              'id' => 68,
              'name' => 'PHP (7.4.1)',
            ),
            35 =>
            array (
              'id' => 43,
              'name' => 'Plain Text',
            ),
            36 =>
            array (
              'id' => 69,
              'name' => 'Prolog (GNU Prolog 1.4.5)',
            ),
            37 =>
            array (
              'id' => 70,
              'name' => 'Python (2.7.17)',
            ),
            38 =>
            array (
              'id' => 71,
              'name' => 'Python (3.8.1)',
            ),
            39 =>
            array (
              'id' => 80,
              'name' => 'R (4.0.0)',
            ),
            40 =>
            array (
              'id' => 72,
              'name' => 'Ruby (2.7.0)',
            ),
            41 =>
            array (
              'id' => 73,
              'name' => 'Rust (1.40.0)',
            ),
            42 =>
            array (
              'id' => 81,
              'name' => 'Scala (2.13.2)',
            ),
            43 =>
            array (
              'id' => 82,
              'name' => 'SQL (SQLite 3.27.2)',
            ),
            44 =>
            array (
              'id' => 83,
              'name' => 'Swift (5.2.3)',
            ),
            45 =>
            array (
              'id' => 74,
              'name' => 'TypeScript (3.7.4)',
            ),
            46 =>
            array (
              'id' => 84,
              'name' => 'Visual Basic.Net (vbnc 0.0.0.5943)',
            ),
        );
        foreach($lanugages as $lang){
            $l = new Languages();
            $l->id = $lang['id'];
            $l->lang = $lang['name'];
            $l->save();
        }
    }
}
