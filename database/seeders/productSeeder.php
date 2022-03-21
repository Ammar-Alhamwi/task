<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productname' => 'Washing Machine',

        ]);
        DB::table('products')->insert([
            'productname' => 'oven',

        ]);
        DB::table('products')->insert([
            'productname' => 'refrigerator',

        ]);
        DB::table('products')->insert([
            'productname' => 'Refrigerator',

        ]);

    }
}
