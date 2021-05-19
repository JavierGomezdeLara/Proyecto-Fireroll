<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(['name'=> "Manual",'description'=>"Es un producto de muy buena calidad",'cost'=>123,'stock'=>432,'dealer'=>"Pathfinder",'image'=>"https://images-na.ssl-images-amazon.com/images/I/51UVF473szL._SX348_BO1,204,203,200_.jpg",'tags'=>"manual,rol"]);
        DB::table('productos')->insert(['name'=> "Miscelanea",'description'=>"Es un producto de calidad",'cost'=>123,'stock'=>2,'dealer'=>"Pathfinder",'image'=>"https://2.bp.blogspot.com/-WoDLiNh7DxE/VMNhlSJnIbI/AAAAAAAAAUc/Nyvj8jan46k/s1600/Director%2Bde%2BJuego.jpg",'tags'=>"manual,rol"]);
        DB::table('productos')->insert(['name'=> "Figura",'description'=>"Calidad de producto",'cost'=>123,'stock'=>43,'dealer'=>"Pathfinder",'image'=>"https://www.net-learning.com.ar/wp-content/uploads/2015/03/C%C3%ADrculo-virtuoso-e-learning-993x600.png",'tags'=>"manual,rol"]);
        DB::table('productos')->insert(['name'=> "Pieza",'description'=>"Muy bueno",'cost'=>123,'stock'=>10,'dealer'=>"Pathfinder",'image'=>"https://nacionrolera.org/wp-content/uploads/2017/08/iniciacion-top.jpg",'tags'=>"manual,rol"]);
        DB::table('productos')->insert(['name'=> "Arte",'description'=>"Es un producto de muy buena calidad",'cost'=>123,'stock'=>21,'dealer'=>"Pathfinder",'image'=>"https://images-na.ssl-images-amazon.com/images/I/51UVF473szL._SX348_BO1,204,203,200_.jpg",'tags'=>"manual,rol"]);

    }
}
