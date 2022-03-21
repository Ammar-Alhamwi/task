<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'paymenttype' => 'creditcard',
            'price' => 1200,
        ]);
        DB::table('payments')->insert([
            'paymenttype' => 'wiretransfer',
            'price' => 1000,
        ]);

    }
}
