<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('languages')->delete();

        \DB::table('languages')->insert(array (
            0 =>
            array (
                'id' => 43,
                'lang' => 'Plain Text',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            1 =>
            array (
                'id' => 44,
                'lang' => 'Executable',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            2 =>
            array (
                'id' => 45,
            'lang' => 'Assembly (NASM 2.14.02)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            3 =>
            array (
                'id' => 46,
            'lang' => 'Bash (5.0.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            4 =>
            array (
                'id' => 47,
            'lang' => 'Basic (FBC 1.07.1)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            5 =>
            array (
                'id' => 48,
            'lang' => 'C (GCC 7.4.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            6 =>
            array (
                'id' => 49,
            'lang' => 'C (GCC 8.3.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            7 =>
            array (
                'id' => 50,
            'lang' => 'C (GCC 9.2.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            8 =>
            array (
                'id' => 51,
            'lang' => 'C# (Mono 6.6.0.161)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            9 =>
            array (
                'id' => 52,
            'lang' => 'C++ (GCC 7.4.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            10 =>
            array (
                'id' => 53,
            'lang' => 'C++ (GCC 8.3.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            11 =>
            array (
                'id' => 54,
            'lang' => 'C++ (GCC 9.2.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            12 =>
            array (
                'id' => 55,
            'lang' => 'Common Lisp (SBCL 2.0.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            13 =>
            array (
                'id' => 56,
            'lang' => 'D (DMD 2.089.1)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            14 =>
            array (
                'id' => 57,
            'lang' => 'Elixir (1.9.4)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            15 =>
            array (
                'id' => 58,
            'lang' => 'Erlang (OTP 22.2)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            16 =>
            array (
                'id' => 59,
            'lang' => 'Fortran (GFortran 9.2.0)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            17 =>
            array (
                'id' => 60,
            'lang' => 'Go (1.13.5)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            18 =>
            array (
                'id' => 61,
            'lang' => 'Haskell (GHC 8.8.1)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            19 =>
            array (
                'id' => 62,
            'lang' => 'Java (OpenJDK 13.0.1)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            20 =>
            array (
                'id' => 63,
            'lang' => 'JavaScript (Node.js 12.14.0)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            21 =>
            array (
                'id' => 64,
            'lang' => 'Lua (5.3.5)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            22 =>
            array (
                'id' => 65,
            'lang' => 'OCaml (4.09.0)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            23 =>
            array (
                'id' => 66,
            'lang' => 'Octave (5.1.0)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            24 =>
            array (
                'id' => 67,
            'lang' => 'Pascal (FPC 3.0.4)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            25 =>
            array (
                'id' => 68,
            'lang' => 'PHP (7.4.1)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            26 =>
            array (
                'id' => 69,
            'lang' => 'Prolog (GNU Prolog 1.4.5)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            27 =>
            array (
                'id' => 70,
            'lang' => 'Python (2.7.17)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            28 =>
            array (
                'id' => 71,
            'lang' => 'Python (3.8.1)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            29 =>
            array (
                'id' => 72,
            'lang' => 'Ruby (2.7.0)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            30 =>
            array (
                'id' => 73,
            'lang' => 'Rust (1.40.0)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            31 =>
            array (
                'id' => 74,
            'lang' => 'TypeScript (3.7.4)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            32 =>
            array (
                'id' => 75,
            'lang' => 'C (Clang 7.0.1)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            33 =>
            array (
                'id' => 76,
            'lang' => 'C++ (Clang 7.0.1)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            34 =>
            array (
                'id' => 77,
            'lang' => 'COBOL (GnuCOBOL 2.2)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            35 =>
            array (
                'id' => 78,
            'lang' => 'Kotlin (1.3.70)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            36 =>
            array (
                'id' => 79,
            'lang' => 'Objective-C (Clang 7.0.1)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            37 =>
            array (
                'id' => 80,
            'lang' => 'R (4.0.0)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            38 =>
            array (
                'id' => 81,
            'lang' => 'Scala (2.13.2)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            39 =>
            array (
                'id' => 82,
            'lang' => 'SQL (SQLite 3.27.2)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            40 =>
            array (
                'id' => 83,
            'lang' => 'Swift (5.2.3)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            41 =>
            array (
                'id' => 84,
            'lang' => 'Visual Basic.Net (vbnc 0.0.0.5943)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            42 =>
            array (
                'id' => 85,
            'lang' => 'Perl (5.28.1)',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
            43 =>
            array (
                'id' => 86,
            'lang' => 'Clojure (1.10.1)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            44 =>
            array (
                'id' => 87,
            'lang' => 'F# (.NET Core SDK 3.1.202)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            45 =>
            array (
                'id' => 88,
            'lang' => 'Groovy (3.0.3)',
                'created_at' => '2022-09-29 17:31:01',
                'updated_at' => '2022-09-29 17:31:01',
            ),
            46 =>
            array (
                'id' => 89,
                'lang' => 'Multi-file program',
                'created_at' => '2022-09-29 17:31:02',
                'updated_at' => '2022-09-29 17:31:02',
            ),
        ));


    }
}
