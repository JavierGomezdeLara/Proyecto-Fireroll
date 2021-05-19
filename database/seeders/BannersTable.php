<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BannersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert(['image'=> "https://i.pinimg.com/originals/2a/f8/f6/2af8f694bed7604682e67177a5d8b9fe.jpg"]);
        DB::table('banners')->insert(['image'=> "https://i.pinimg.com/originals/f1/72/21/f17221fc7fcaaad1f8d89a0b809c9460.jpg"]);
        DB::table('banners')->insert(['image'=> "https://i.pinimg.com/736x/2c/16/71/2c1671382e2ec06eac1d4159af8ea149.jpg"]);
        DB::table('banners')->insert(['image'=> "https://i.pinimg.com/736x/39/e6/81/39e6812a0f41bec04dcba69e1d2accad.jpg"]);
        DB::table('banners')->insert(['image'=> "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F710513278704899324%2F&psig=AOvVaw1JW2KnwBXUC0rkM9Hy0_fH&ust=1620658810828000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCICqnYrvvPACFQAAAAAdAAAAABAn"]);
    }
}
