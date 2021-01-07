<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Fikry AS',
            'nis' => 101,
            'tgl_lahir' => '1999-12-22'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Maulana',
            'nis' => 102,
            'tgl_lahir' => '1998-12-22'
        ]);
    }
}
