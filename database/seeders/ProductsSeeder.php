<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Product::factory(50)->create();        
        $faker = Faker::create();
        DB::table('products')->insert([
            'name' => 'Xbox Series X',
            'description' => 'Xbox Series X, la consola Xbox más rápida y potente de la historia.
                Juega miles de títulos de cuatro generaciones de consolas: todos los juegos se ven mejor y se juegan mejor en Xbox Series X.',
            'price' => 2500000,
            'available' => true,
            'stock' => 60,
            'score' => 4,
            'video_url' => 'https://youtube.com/embed/0tUqIHwHDEc',
            'discount' => 32,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
        DB::table('products')->insert([
            'name' => 'Playstation 5',
            'description' => 'Todo lo que necesitas saber de la consola PlayStation®5 y PlayStation®5 Digital Edition: los mejores juegos para PS5, accesorios para PS5',
            'price' => 3500000,
            'available' => true,
            'stock' => 50,
            'score' => 3,
            'video_url' => 'https://youtube.com/embed/RkC0l4iekYo',
            'discount' => 25,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
        DB::table('products')->insert([
            'name' => 'Nintendo Switch',
            'description' => 'Juega en familia, en la pantalla de la tele,en el parque o en casa de un amigo.',
            'price' => 1600000,
            'available' => true,
            'stock' => 40,
            'score' => 3,
            'video_url' => 'https://youtube.com/embed/f5uik5fgIaI',
            'discount' => 25,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);


        DB::table('products')->insert([
            'name' => 'Google Chromecast',
            'description' => 'El Chromecast ayudó a la expansión de Netflix y otros servicios de streaming, además nos ofreció una experiencia excelente sobre qué significaba realmente la conexión entre dispositivos. Abrir el móvil, pulsar un botón y verlo en grande.',
            'price' => 1600000,
            'available' => true,
            'stock' => 80,
            'score' => 4,
            'video_url' => 'https://youtube.com/embed/5qZG3sJpHIo',
            'discount' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
        DB::table('products')->insert([
            'name' => 'AirPods',
            'description' => 'Los AirPods son uno de los productos de la década porque han empujado a la industria tecnológica a dejar de lado los cables para la conectividad de audio en electrónica de consumo, a dejar de lado el conector jack.',
            'price' => 900000,
            'available' => true,
            'stock' => 45,
            'score' => 4,
            'video_url' => 'https://youtube.com/embed/1tpU8cpgY1I',
            'discount' => 8,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
        DB::table('products')->insert([
            'name' => 'Xiaomi Mi Band',
            'description' => 'Ya vamos por la cuarta generación y todas han ido un poco a más. Debe estar entre los gadgets más relevantes de la década por haber sido capaz de llevar las pulseras a todo el mundo. Y no deben haber vendido pocas unidades. Eso seguro.',
            'price' => 1600000,
            'available' => true,
            'stock' => 60,
            'score' => 2,
            'video_url' => 'https://youtube.com/embed/EDcpsQBieQY',
            'discount' => 60,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);


        DB::table('products')->insert([
            'name' => 'BATERIA 12 PZ AA TV TALENT MASTER',
            'description' => 'Esta línea Experto del calor cuenta con base difusora, termo señal que te indica cuando está listo para empezar a cocinar y antiadherente Triforce Gold.',
            'price' => 850000,
            'available' => true,
            'stock' => 90,
            'score' => 4,
            'video_url' => 'https://youtube.com/embed/kMa39lAr_5A',
            'discount' => 47,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
        DB::table('products')->insert([
            'name' => 'HORNO TOSTADOR 5 EN UNO',
            'description' => 'Este horno tiene 5 funciones en 1. El usuario podrá hornear, tostar, asar, calentar o hasta usar este increíble producto como un Turbo Air frier sin aceite.',
            'price' => 1200000,
            'available' => true,
            'stock' => 32,
            'score' => 5,
            'video_url' => 'https://youtube.com/embed/lS6DLfgQz40',
            'discount' => 46,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
        DB::table('products')->insert([
            'name' => 'LICUADORA INFINYFORCE 12V AZ 600W CO',
            'description' => 'Placas: Doble revestimiento en antiadherente para facilitar la limpieza.Luz piloto: Para mostrar cuando el producto está conectado (rojo) y cuando está listo para usar (verde).',
            'price' => 1400000,
            'available' => true,
            'stock' => 110,
            'score' => 4,
            'video_url' => 'https://youtube.com/embed/7FcMEkWwQUw',
            'discount' => 28,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
