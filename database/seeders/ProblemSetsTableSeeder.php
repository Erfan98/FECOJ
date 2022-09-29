<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProblemSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('problem_sets')->delete();
        
        \DB::table('problem_sets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author' => 1,
                'title' => 'Hello FECOJ',
                'statement' => '<p>Print the as the output field says</p>',
                'sample_input' => NULL,
                'sample_output' => '<p>Welcome to FECOJ</p>',
                'notes' => '<p>In this problem here is not input</p>',
                'standerd_input' => NULL,
                'standerd_output' => 'Welcome to FECOJ',
                'cpu_limit' => '1000',
                'mem_limit' => '256',
                'source_limit' => '20',
                'created_at' => '2022-09-29 17:51:17',
                'updated_at' => '2022-09-29 17:51:17',
            ),
            1 => 
            array (
                'id' => 2,
                'author' => 1,
                'title' => 'Basic Sum',
                'statement' => '<p>Take two integers and print the output</p>',
                'sample_input' => '<p>4<br>2 3<br>1 2<br>3 5<br>4 5</p>',
                'sample_output' => '<p>5<br>3<br>8<br>9</p>',
                'notes' => '<p>First Line contains the number of testcase</p>',
                'standerd_input' => '4
2 3
1 2
3 5
4 5',
                'standerd_output' => '5
3
8
9',
                'cpu_limit' => '2000',
                'mem_limit' => '256',
                'source_limit' => '20',
                'created_at' => '2022-09-29 17:54:22',
                'updated_at' => '2022-09-29 17:54:22',
            ),
        ));
        
        
    }
}