<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubmissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('submissions')->delete();
        
        \DB::table('submissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'token' => 'f0053482-5a08-46b7-850b-62df732571ba',
                'source_code' => 'Zm9yIF8gaW4gcmFuZ2UoaW50KGlucHV0KCkpKToKICAgIGEsYiA9IG1hcChpbnQsaW5wdXQoKS5zcGxpdCgpKQogICAgcHJpbnQoYStiKQ==',
                'who' => '1',
                'problem' => '2',
                'lang' => '71',
                'verdict' => 'Accepted',
                'stderr' => '0',
                'time' => '0.0195',
                'memory' => '3460',
                'created_at' => '2022-09-29 17:54:44',
                'updated_at' => '2022-09-29 17:54:44',
            ),
            1 => 
            array (
                'id' => 2,
                'token' => 'f2610048-6a8c-42a5-af15-c0ff6c6faa5a',
                'source_code' => 'cHJpbnQoIldlbGNvbWUgdG8gRkVDT0oiKQ==',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
                'verdict' => 'Wrong Answer',
                'stderr' => '0',
                'time' => '0.026',
                'memory' => '3312',
                'created_at' => '2022-09-29 17:55:53',
                'updated_at' => '2022-09-29 17:55:53',
            ),
            2 => 
            array (
                'id' => 3,
                'token' => '2e58dbfa-cb62-40e6-a97f-de2c29097b6c',
                'source_code' => 'cHJpbnQoIldlbGNvbWUgdG8gRkVDT0oiKQ==',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
                'verdict' => 'Wrong Answer',
                'stderr' => '0',
                'time' => '0.022',
                'memory' => '3564',
                'created_at' => '2022-09-29 18:00:56',
                'updated_at' => '2022-09-29 18:00:56',
            ),
            3 => 
            array (
                'id' => 4,
                'token' => '75c14071-e17b-4bcf-96e9-d27d1ad4ccfc',
                'source_code' => 'cHJpbnQoIldlbGNvbWUgdG8gRkVDT0oiKQ==',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
                'verdict' => 'In Queue',
                'stderr' => '0',
                'time' => '0.0',
                'memory' => '0',
                'created_at' => '2022-09-29 18:00:56',
                'updated_at' => '2022-09-29 18:00:56',
            ),
            4 => 
            array (
                'id' => 5,
                'token' => '25a6efae-c08e-488a-bc4c-f3f6191caed9',
                'source_code' => 'cHJpbnQoIldlbGNvbWUgdG8gRkVDT0oiLGVuZD0nJyk=',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
                'verdict' => 'Wrong Answer',
                'stderr' => '0',
                'time' => '0.023',
                'memory' => '3520',
                'created_at' => '2022-09-29 18:01:23',
                'updated_at' => '2022-09-29 18:01:23',
            ),
            5 => 
            array (
                'id' => 6,
                'token' => 'e3d46f6d-9164-493a-ad2e-acd299cd6c97',
                'source_code' => 'cHJpbnQoIldlbGNvbWUgdG8gRkVDT0oiLGVuZD0iIik=',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
                'verdict' => 'Wrong Answer',
                'stderr' => '0',
                'time' => '0.025',
                'memory' => '3268',
                'created_at' => '2022-09-29 18:02:03',
                'updated_at' => '2022-09-29 18:02:03',
            ),
            6 => 
            array (
                'id' => 7,
                'token' => 'cca4f085-2ba1-4252-b624-e4ae41e9804a',
                'source_code' => 'I2luY2x1ZGU8aW9zdHJlYW0+CnVzaW5nIG5hbWVzcGFjZSBzdGQ7CgppbnQgbWFpbigpewogICAgY291dDw8IldlbGNvbWUgdG8gRkVDT0oiOwogICAgcmV0dXJuIDA7Cn0=',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
            'verdict' => 'Runtime Error (NZEC)',
                'stderr' => 'ICBGaWxlICJzY3JpcHQucHkiLCBsaW5lIDIKICAgIHVzaW5nIG5hbWVzcGFj
ZSBzdGQ7CiAgICAgICAgICBeClN5bnRheEVycm9yOiBpbnZhbGlkIHN5bnRh
eAo=
',
                'time' => '0.019',
                'memory' => '3368',
                'created_at' => '2022-09-29 18:03:54',
                'updated_at' => '2022-09-29 18:03:54',
            ),
            7 => 
            array (
                'id' => 8,
                'token' => '7b05268a-d499-4f4c-94cf-6a9c23927b60',
                'source_code' => 'I2luY2x1ZGU8aW9zdHJlYW0+CnVzaW5nIG5hbWVzcGFjZSBzdGQ7CgppbnQgbWFpbigpewogICAgY291dDw8IldlbGNvbWUgdG8gRkVDT0oiOwogICAgcmV0dXJuIDA7Cn0=',
                'who' => '1',
                'problem' => '1',
                'lang' => '54',
                'verdict' => 'Wrong Answer',
                'stderr' => '0',
                'time' => '0.008',
                'memory' => '5096',
                'created_at' => '2022-09-29 18:04:12',
                'updated_at' => '2022-09-29 18:04:12',
            ),
            8 => 
            array (
                'id' => 9,
                'token' => '7edcbf80-3d6f-4d6a-8820-b9db4282640b',
                'source_code' => 'I2luY2x1ZGU8aW9zdHJlYW0+CnVzaW5nIG5hbWVzcGFjZSBzdGQ7CgppbnQgbWFpbigpewogICAgY291dDw8IldlbGNvbWUgdG8gRkVDT0oiOwogICAgcmV0dXJuIDA7Cn0=',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
            'verdict' => 'Runtime Error (NZEC)',
                'stderr' => 'ICBGaWxlICJzY3JpcHQucHkiLCBsaW5lIDIKICAgIHVzaW5nIG5hbWVzcGFj
ZSBzdGQ7CiAgICAgICAgICBeClN5bnRheEVycm9yOiBpbnZhbGlkIHN5bnRh
eAo=
',
                'time' => '0.027',
                'memory' => '3428',
                'created_at' => '2022-09-29 18:07:50',
                'updated_at' => '2022-09-29 18:07:50',
            ),
            9 => 
            array (
                'id' => 10,
                'token' => 'd6e5801c-ee5b-4178-a2f7-112c62714c7b',
                'source_code' => 'I2luY2x1ZGU8aW9zdHJlYW0+CnVzaW5nIG5hbWVzcGFjZSBzdGQ7CgppbnQgbWFpbigpewogICAgY291dDw8IldlbGNvbWUgdG8gRkVDT0oiOwogICAgcmV0dXJuIDA7Cn0=',
                'who' => '1',
                'problem' => '1',
                'lang' => '54',
                'verdict' => 'Accepted',
                'stderr' => '0',
                'time' => '0.006',
                'memory' => '1684',
                'created_at' => '2022-09-29 18:08:05',
                'updated_at' => '2022-09-29 18:08:05',
            ),
            10 => 
            array (
                'id' => 11,
                'token' => '171c56d6-5268-4f52-a41f-85fc8a491cf4',
                'source_code' => 'cHJpbnQoIldlbGNvbWUgdG8gRkVDT0oiLGVuZD0iIik=',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
                'verdict' => 'Accepted',
                'stderr' => '0',
                'time' => '0.02',
                'memory' => '3446',
                'created_at' => '2022-09-29 18:08:27',
                'updated_at' => '2022-09-29 18:08:27',
            ),
            11 => 
            array (
                'id' => 12,
                'token' => 'c4f0d2cb-1315-4a40-8684-35696ac902b2',
                'source_code' => 'cHJpbnQoIldlbGNvbWUgdG8gRkVDT0oiKQ==',
                'who' => '1',
                'problem' => '1',
                'lang' => '71',
                'verdict' => 'Accepted',
                'stderr' => '0',
                'time' => '0.03',
                'memory' => '3444',
                'created_at' => '2022-09-29 18:09:01',
                'updated_at' => '2022-09-29 18:09:01',
            ),
        ));
        
        
    }
}