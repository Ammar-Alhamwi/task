<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'products' => 1,
            'userid' => 2,
            'price' => 2000,
            'payment_id' => 2,


        ]);
        DB::table('orders')->insert([
            'products' =>3,
            'userid' => 1,
            'price' => 1000,
            'payment_id' => 1,


        ]);
    }
}
