<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class roomseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typerooms')->insert([
            'room_type'=>'Deluxe',
            'room_details'=>'20ft,kingsize bed',
            'room_price'=>'890.000',
            'room_code'=>'001'
        ]);
    }
}
