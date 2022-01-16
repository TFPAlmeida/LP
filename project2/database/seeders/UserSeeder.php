<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;/*importar base de dados*/
use Illuminate\Support\Facades\Hash;/*esconder password*/

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        
            'name'=>'Tiago',
            'email'=>'tiago.fpa@gmail.com',
            'password'=>Hash::make('12345')
         
          ]);
    }
}
