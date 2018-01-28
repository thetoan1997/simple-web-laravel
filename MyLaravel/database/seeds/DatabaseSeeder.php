<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersSeed::class);
        $this->call(TinTucSeed::class);
        // $this->call(CommentSeed::class);
    }
}
class UsersSeed extends Seeder
{
    public function run(){
        DB::table('users')->insert([
            ['name'=> 'Dan Thy','email' => 'thy@gmail.com','password'=> bcrypt('danthy'),'created_at' => new DateTime()],
            ['name'=> 'Khanh Tran','email' => 'tran@gmail.com','password'=> bcrypt('khanhtran'),'created_at' => new DateTime()],
            ['name'=> 'Diep Toan','email' => 'toan@gmail.com','password'=> bcrypt('dieptoan'),'created_at' => new DateTime()]
        ]);
    }
}
class TinTucSeed extends Seeder
{
    public function run(){
        DB::table('tintuc')->insert([
                [   'idUser' => 2,
                    'TieuDe'=> 'news4',
                'Link' => 'news4',
                'TomTat' => 'Thấy đỉnh FANSIPAN chưa',
                'NoiDung' => 'Cắm cái cờ cái được không',
                'Imagee' => '4',
                'NoiBat' => 4,
                'SoLuotXem'=> 20,
                'idLoaiTin' => 1,
                'created_at' => new DateTime()
            ],
            [   'idUser' => 1,
                'TieuDe'=> 'news5',
            'Link' => 'news5',
            'TomTat' => 'Chụp cái gì đéo hiểu?!',
            'NoiDung' => '2 thằng lzz',
            'Imagee' => '5',
            'NoiBat' => 5,
            'SoLuotXem'=> 30,
            'idLoaiTin' => 2,
            'created_at' => new DateTime()
            ],
            [   'idUser' => 3,
                'TieuDe'=> 'news6',
            'Link' => 'news6',
            'TomTat' => 'Cô ơi cô',    
            'NoiDung' => 'Cô đừng đi lấy chồng...',
            'Imagee' => '6',
            'NoiBat' => 6,
            'SoLuotXem'=> 200,
            'idLoaiTin' => 3,
            'created_at' => new DateTime()
            ]
            ]);
    }
}
class CommentSeed extends Seeder
{
    public function run(){
        DB::table('comment')->insert([
            ['idUser'=> 3,'idTinTuc' => 4,'NoiDung'=> 'Diep Toan da comment','created_at' => new DateTime()],
            ['idUser'=> 1,'idTinTuc' => 7,'NoiDung'=> 'Dan Thy da comment','created_at' => new DateTime()],
        ]);
    }
}

