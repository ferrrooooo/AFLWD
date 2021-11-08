<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class tamuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tamus')->insert([
            'tamu_name'=>'sutthayaa',
            'tamu_checkin'=>'2021/11/17',
            'tamu_checkout'=>'2021/11/20',
            'tamu_typeroom'=>'deluxe',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

    }
}
