<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'email' => 'admin@test.com', 
                'email_verified_at' => now(),
                'password' => Hash::make('apprevenir88'),
                'code' => uniqid(Str::random(8)),
                'remember_token' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('profiles')->insert([
            'user_id' => 1,
            'first_names' => 'Usuario Apprevenir',
            'last_names' => 'Root',
            'phone' => '123456789',
            'birthday' => date('Y-m-d'),
            'is_student' => 0
        ]);
    }
}
