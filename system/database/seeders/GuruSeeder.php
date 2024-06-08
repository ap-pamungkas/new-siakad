<?php

namespace Database\Seeders;

use Faker\Core\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     

   
    public function run(): void
{
        DB::table('guru')->insert([
            'guru_id'=>str::uuid(),
            'email'=>'test@email.com',
            'nama' => 'test 1',
            'nip' => 12345678,
            'foto'=>'dummy',
           'password' => Hash::make('password'),
        ]);
    }
}
