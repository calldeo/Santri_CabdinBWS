<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User:: create([
            'name' =>'Deo andreas',
            'level' =>'admin',
            'email' =>'deo@gmail.com',
            'password' =>bcrypt('callmedeo'),
            'remember_token' =>Str::random(60),
        ]);
      

       
    }
}
