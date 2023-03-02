<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        DB::table('tbl_about')->insert([
            'title' => 'Welcome To StuffedToys',
            'p1' => 'ON SALE!!!',
            'btn' => 'Get Yours Now'
        ]);
        DB::table('tbl_product')->insert([
            'product1' => 'VERMONT TEDDY BEAR COMPANY',
            'product2' => 'BEDTIME ORIGINALS',
            'product3' => 'MORISMOS'
        ]);
    }
}
