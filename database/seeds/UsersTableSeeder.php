<?php

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
                'role_id' => 1,
                'name' => 'Jean Pierre',
                'email' => 'jpvc@email.com',
                'avatar' => 'users\\March2020\\TPegAdXpxWhX8G4XewmI.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mbvF.Xc3S93uj2eS6tQZNO/.bf6fQnXTsNxHwCMfhpp1yYT3u8sk.',
                'remember_token' => 'w4rmlGnuQpnYks3bsEixMNUSGLKNoz9gSWM1eR48WhlGxNmTDhSUHibG8Pp7',
                'settings' => '{"locale":"es"}',
                'created_at' => '2020-03-15 20:58:47',
                'updated_at' => '2020-03-17 20:19:32',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fwxQ.JN/ovSWnMuVnSrTBuxAqKWiekRIln9g004Gy5yzmmYkUyPXm',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-03-17 20:22:36',
                'updated_at' => '2020-03-17 20:22:36',
            ),
        ));
        
        
    }
}