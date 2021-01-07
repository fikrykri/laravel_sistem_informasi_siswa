<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@smacontoh.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Fikry AS',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'fikry@smacontoh.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Maulana',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'maul@smacontoh.com',
            'password' => bcrypt('password123')
        ]);
    }
}
