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
            'last_names_two' => 'Root 2',
            'phone' => '123456789',
            'birthday' => date('Y-m-d'),
            'is_student' => 0
        ]);

        // Entidad territorial
        DB::table('users')->insert([
            [
                'id' => 2,
                'email' => 'admin@antioquia.gov.co',
                'email_verified_at' => now(),
                'password' => Hash::make('apprevenir88'),
                'code' => uniqid(Str::random(8)),
                'remember_token' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'client' => 'entidades territoriales'
            ]
        ]);

        DB::table('profiles')->insert([
            'user_id' => 2,
            'first_names' => 'Gobernación',
            'last_names' => 'Antioquia',
            'phone' => '1234567',
            'birthday' => date('Y-m-d'),
            'is_student' => 0
        ]);

        DB::table('communes')->insert([
            'id' => 1,
            'user_id' => 2,
            'commune' => 'El Poblado',
            'zone_type' => 'urbana',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('neighborhoods')->insert([
            'id' => 1,
            'commune_id' => 1,
            'neighborhood' => 'Colombia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('communes')->insert([
            'id' => 2,
            'user_id' => 2,
            'commune' => 'San Cristobal',
            'zone_type' => 'rural',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('neighborhoods')->insert([
            'id' => 2,
            'commune_id' => 2,
            'neighborhood' => 'Pedregal',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Secretaría de educación
        DB::table('users')->insert([
            [
                'id' => 3,
                'email' => 'admin@seeduca.gov.co',
                'email_verified_at' => now(),
                'password' => Hash::make('apprevenir88'),
                'code' => uniqid(Str::random(8)),
                'remember_token' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'client' => 'secretarias de educacion'
            ]
        ]);

        DB::table('profiles')->insert([
            'user_id' => 3,
            'first_names' => 'Secretaría de Educación',
            'last_names' => 'Antioquia',
            'phone' => '1234567',
            'birthday' => date('Y-m-d'),
            'is_student' => 0
        ]);

        DB::table('educational_institutions')->insert([
            'id' => 1,
            'user_id' => 3,
            'educational_institution' => 'Colegio 1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('grades')->insert([
            'id' => 1,
            'user_id' => 3,
            'grade' => 'Once',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Instituciones Educativas
        DB::table('users')->insert([
            [
                'id' => 4,
                'email' => 'admin@colegio2.com',
                'email_verified_at' => now(),
                'password' => Hash::make('apprevenir88'),
                'code' => uniqid(Str::random(8)),
                'remember_token' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'client' => 'instituciones educativas'
            ]
        ]);

        DB::table('profiles')->insert([
            'user_id' => 4,
            'first_names' => 'Colegio',
            'last_names' => '2',
            'phone' => '1234567',
            'birthday' => date('Y-m-d'),
            'is_student' => 0
        ]);

        DB::table('educational_grades')->insert([
            'user_id' => 4,
            'grade' => 'Once',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Universidades
        DB::table('users')->insert([
            [
                'id' => 5,
                'email' => 'admin@funlam.edu.co',
                'email_verified_at' => now(),
                'password' => Hash::make('apprevenir88'),
                'code' => uniqid(Str::random(8)),
                'remember_token' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'client' => 'universidades'
            ]
        ]);

        DB::table('profiles')->insert([
            'user_id' => 5,
            'first_names' => 'Fundación Universitaria',
            'last_names' => 'Luis Amigó',
            'phone' => '1234567',
            'birthday' => date('Y-m-d'),
            'is_student' => 0
        ]);

        DB::table('programs')->insert([
            'id' => 1,
            'user_id' => 5,
            'program' => 'Ingeniería de Sistemas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('modalities')->insert([
            'id' => 1,
            'user_id' => 5,
            'modality' => 'Presencial',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('semesters')->insert([
            'id' => 1,
            'user_id' => 5,
            'semester' => 'Primero',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Empresas
        DB::table('users')->insert([
            [
                'id' => 6,
                'email' => 'admin@epm.com.co',
                'email_verified_at' => now(),
                'password' => Hash::make('apprevenir88'),
                'code' => uniqid(Str::random(8)),
                'remember_token' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'client' => 'empresas'
            ]
        ]);

        DB::table('profiles')->insert([
            'user_id' => 6,
            'first_names' => 'Empresas Públicas',
            'last_names' => 'de Medellín',
            'phone' => '1234567',
            'birthday' => date('Y-m-d'),
            'is_student' => 0
        ]);

        DB::table('locations')->insert([
            'id' => 1,
            'user_id' => 6,
            'location' => 'Medellín',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'id' => 1,
            'user_id' => 6,
            'area' => 'Edificio Inteligente',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 6,
            'schedul' => '8am - 5pm',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
