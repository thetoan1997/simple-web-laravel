<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name'=> 'Dan Thy','email' => 'thy@gmail.com','password'=> bcrypt('danthy'),'created_at' => new DateTime()],
            ['name'=> 'Khanh Tran','email' => 'tran@gmail.com','password'=> bcrypt('khanhtran'),'created_at' => new DateTime()],
            ['name'=> 'Diep Toan','email' => 'toan@gmail.com','password'=> bcrypt('dieptoan'),'created_at' => new DateTime()]
        ]);
    }
}
