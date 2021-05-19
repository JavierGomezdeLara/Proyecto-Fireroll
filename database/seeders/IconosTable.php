<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IconosTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iconos')->insert(['image'=> "https://www.flaticon.es/premium-icon/icons/svg/2847/2847456.svg"]);
        DB::table('iconos')->insert(['image'=> "https://image.flaticon.com/icons/png/512/119/119702.png"]);
        DB::table('iconos')->insert(['image'=> "https://image.flaticon.com/icons/png/512/1729/1729286.png"]);
        DB::table('iconos')->insert(['image'=> "https://image.flaticon.com/icons/png/512/1947/1947870.png"]);
        DB::table('iconos')->insert(['image'=> "https://image.flaticon.com/icons/png/512/3098/3098643.png"]);
    }
}
