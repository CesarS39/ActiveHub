<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'administrator',
            'lastName'=>'example',
            'phone'=>'1234567890',
            'photo'=>'ejemploRuta', 
            'email'=>'administrator@gmail.com',
            'password'=>Hash::make('12345678'),
            
        ])->assignRole('Administrator');

        User::create([
            'name' => 'teacher',
            'lastName'=>'example',
            'phone'=>'1234567890',
            'photo'=>'ejemploRuta', 
            'email'=>'teacherone@gmail.com',
            'password'=>Hash::make('12345678'),
            
        ])->assignRole('Teacher');;
        
        User::create([
            'name' => 'student',
            'lastName'=>'example',
            'phone'=>'1234567890',
            'photo'=>'ejemploRuta', 
            'email'=>'studentone@gmail.com',
            'password'=>Hash::make('12345678'),
            
        ])->assignRole('Student');;

        User::factory(17)->create();
    }
}
