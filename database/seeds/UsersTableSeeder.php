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
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin'),
                'remember_token' => 'ysj3JNrITIkHkOmUHCWqB7DTP6tnJSDZXuQbSAWxJGT6dYRbNYRqdk2O8Tru',
                'settings' => '{"locale":"es"}',
                'created_at' => '2020-03-15 20:58:47',
                'updated_at' => '2020-03-17 20:19:32',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Customer 1',
                'email' => 'customer@customer.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => Hash::make('customer1'),
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-03-17 20:22:36',
                'updated_at' => '2020-03-17 20:22:36',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Customer 2',
                'email' => 'customer2@customer.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => Hash::make('customer2'),
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-03-17 20:22:36',
                'updated_at' => '2020-03-17 20:22:36',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller@seller.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => Hash::make('seller1'),
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-03-17 20:22:36',
                'updated_at' => '2020-03-17 20:22:36',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@seller.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => Hash::make('seller2'),
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-03-17 20:22:36',
                'updated_at' => '2020-03-17 20:22:36',
            ),
        ));
        
        
    }
}