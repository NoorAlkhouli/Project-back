<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->delete();



        User::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);


        DB::table('categories')->delete();


        Category::create([
            'id' => '1',
            'name' => 'غرف النوم',
            'status' => 1
        ]);

        Category::create([
            'id' => '2',
            'name' => 'غرف الصالون',
            'status' => 1
        ]);

        Category::create([
            'id' => '3',
            'name' => 'طاولات',
            'status' => 1
        ]);

        Category::create([
            'id' => '4',
            'name' => 'ديكورات خشب',
            'status' => 1
        ]);

        Category::create([
            'id' => '5',
            'name' => 'الاراجيح',
            'status' => 1
        ]);

        Category::create([
            'id' => '6',
            'name' => 'البرادي',
            'status' => 1
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
