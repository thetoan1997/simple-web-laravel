<?php

use Illuminate\Database\Seeder;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tintuc')->insert([
                        [   'idUser' => 2,
                            'TieuDe'=> 'Dan Thy',
                            'Link' => 'thy@gmail.com',
                            'TomTat' => 'thy@gmail.com',
                            'NoiDung' => 'thy@gmail.com',
                            'Imagee' => 'thy@gmail.com',
                            'NoiBat' => 'thy@gmail.com',
                            'SoLuotXem'=> bcrypt('danthy'),
                            'idLoaiTin' => 'sd',
                            'created_at' => new DateTime()
                        ]
                        // [   'TieuDe'=> 'Dan Thy',
                        // 'Link' => 'thy@gmail.com',
                        // 'TomTat' => 'thy@gmail.com',
                        // 'NoiDung' => 'thy@gmail.com',
                        // 'Imagee' => 'thy@gmail.com',
                        // 'NoiBat' => 'thy@gmail.com',
                        // 'SoLuotXem'=> bcrypt('danthy'),
                        // 'idLoaiTin' => 'sd',
                        // 'created_at' => new DateTime()
                        // ],
                        // [   'TieuDe'=> 'Dan Thy',
                        // 'Link' => 'thy@gmail.com',
                        // 'TomTat' => 'thy@gmail.com',    
                        // 'NoiDung' => 'thy@gmail.com',
                        // 'Imagee' => 'thy@gmail.com',
                        // 'NoiBat' => 'thy@gmail.com',
                        // 'SoLuotXem'=> bcrypt('danthy'),
                        // 'idLoaiTin' => 'sd',
                        // 'created_at' => new DateTime()
                        // ]
                    ]);
    }
}
