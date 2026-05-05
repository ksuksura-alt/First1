<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
	{
		public function run()
		{
			
        DB::table('users')->insert([
            'name' => Str::random(5),
			'email' => Str::random(5).'@mail.ru',
           // 'age'=> ,
           // 'salary'=>,
			'password' => Hash::make('123'),
           // 'created_at'=>,
           // 'updated_at'=>,

        ]); 
	}
    }
    //php artisan db:seed --class=UsersSeeder в командную строку
?>

