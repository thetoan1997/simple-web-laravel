<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comment')->insert([
            ['idUser'=> 3,'idTinTuc' => 4,'NoiDung'=> 'Diep Toan da comment','created_at' => new DateTime()],
            ['idUser'=> 1,'idTinTuc' => 7,'NoiDung'=> 'Dan Thy da comment','created_at' => new DateTime()],
        ]);
    }
}
