<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
            'nombre'=> 'Estructura de Datos',
            'autor' => 'Luis Joyanes',
        ]);
        DB::table('libro')->insert([
            'nombre'=> 'Programacion Orientada a Objetos',
            'autor' => 'Luis Joyanes',
        ]);

    }
}
