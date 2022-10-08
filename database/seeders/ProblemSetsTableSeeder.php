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
            2 => 
            array (
                'id' => 3,
                'author' => 3,
                'title' => 'Multiply X * Y',
            'statement' => '<p>You are given two real numbers <strong>X</strong> and <strong>Y</strong>. Multiply both the numbers and print it.</p><h3><strong>Input</strong></h3><p>Input contains two real numbers <strong>X</strong> and <strong>Y</strong> where (0&lt;=X,Y&lt;=1000).</p><h3><strong>Output</strong></h3><p>Print the answer of X*Y. Error less than 10^-6 will be ignored.</p>',
                'sample_input' => '<p>7 5</p>',
                'sample_output' => '<p>35</p>',
                'notes' => '<p>Don\'t forget to print new line</p>',
                'standerd_input' => '7 5',
                'standerd_output' => '35',
                'cpu_limit' => '1000',
                'mem_limit' => '256',
                'source_limit' => '20',
                'created_at' => '2022-10-08 13:15:58',
                'updated_at' => '2022-10-08 13:15:58',
            ),
            3 => 
            array (
                'id' => 4,
                'author' => 3,
                'title' => 'Tribonacci Series?',
            'statement' => '<p>Erfan loves to play with equations. In this problem, Tashfiq gives you an equation like that:</p><p><strong>a(n) = a(n-1) + a(n-2) + a(n-3)</strong></p><p>Tashfiq also gives you some information about the equation. These are:</p><p>a(0) = X
a(1) = Y
a(2) = Z
</p><p>Now, Alam who is a teammate of Tashfiq wants to know the value of <strong>a(n)</strong> from you.</p><p>&nbsp;</p><h3><strong>Input</strong></h3><p>The first line of input contains a single integer <strong>T(1&lt;=T&lt;=50)</strong> which denotes the number of test cases. Each next <strong>T</strong> line of input contains four integers <strong>X, Y, Z, N</strong> where <strong>0&lt;=X, Y, Z &lt;=5</strong> and <strong>(0&lt;=N&lt;=50).</strong></p><h3><strong>Output</strong></h3><p>For each test case, print the required output in a new line.</p>',
                'sample_input' => '<p>3<br>0 0 1 4<br>1 2 3 8<br>5 2 1 10<br>&nbsp;</p>',
                'sample_output' => '<p>2<br>125<br>437<br>&nbsp;</p>',
                'notes' => '<p>No notes</p>',
                'standerd_input' => '3
0 0 1 4
1 2 3 8
5 2 1 10',
                'standerd_output' => '2
125
437',
                'cpu_limit' => '1000',
                'mem_limit' => '256',
                'source_limit' => '20',
                'created_at' => '2022-10-08 13:30:00',
                'updated_at' => '2022-10-08 13:30:00',
            ),
            4 => 
            array (
                'id' => 5,
                'author' => 3,
                'title' => 'FEC ID Card',
                'statement' => '<p>One day, a student of FEC named Erfan forgot to take his student id. So he tried to enter the gate without his id. But the security guards stopped him and took him to the principal\'s office.</p><p>Now, Mizan sir wants to punish the bad boy Erfan. So, he wants to know the details of Erfan.</p><p>You are given student id of Erfan. Your task is to print the details of Erfan.</p><p>The first two digits determine the session of Erfan.<br>The second two digit denotes the department and <br>The last two digits indicate the roll no.</p><p>Department Code of FEC:</p><p>10 - Civil Engineering</p><p>20 - Electrical & Electronic Engineering</p><p>30 - Computer Science & Engineering</p><h3><strong>Input</strong></h3><p>The input contains a single six digits student id of FEC. It is guaranteed that the student id is a valid FEC student id</p><h3><strong>Output</strong></h3><p>Print the necessary details for the given student id. See sample input and output for more details.</p>',
                'sample_input' => '<p>193044</p>',
                'sample_output' => '<p>Roll No: 44<br>Department: Computer Science &amp; Engineering<br>Session: 2019-2020</p>',
                'notes' => '<p>No notes here</p>',
                'standerd_input' => '193044',
                'standerd_output' => 'Roll No: 44
Department: Computer Science & Engineering
Session: 2019-2020',
                'cpu_limit' => '2000',
                'mem_limit' => '256',
                'source_limit' => '20',
                'created_at' => '2022-10-08 13:40:32',
                'updated_at' => '2022-10-08 13:40:32',
            ),
        ));
        
        
    }
}