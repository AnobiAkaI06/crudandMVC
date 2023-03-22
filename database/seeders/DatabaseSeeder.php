<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

        DB::table('employees')->insert([
            'name'          =>  'txt',
            'email'       =>  'kai@gmail.com',
            'address'  =>  'lunokan',
            'phone'          =>  '09363023500'
        ]);
        DB::table('employees')->insert([
            'name'          =>  'ateya',
            'email'       =>  'taehyun@gmail.com',
            'address'  =>  'lunokan',
            'phone'          =>  '09563023500'
        ]);
    }
}
