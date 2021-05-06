<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Image::factory(50)->create();

        $faker = Faker::create();
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://i.blogs.es/00d7c8/00seriesx/450_1000.jpeg',
            'product_id' => 51
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://www.techinn.com/f/13777/137776929/microsoft-xbox-series-x-1tb.jpg',
            'product_id' => 51
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://exitocol.vtexassets.com/arquivos/ids/6569550/consola-sony-playstation-5-ps5-1-tb-lector-de-disco.jpg?v=637497972411800000',
            'product_id' => 52
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://i.blogs.es/9dee5c/143354-games-feature-sony-playstation-5-release-date-rumours-and-everything-you-need-to-know-about-ps5-image1-cvz3adase9/450_1000.jpg',
            'product_id' => 52
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/61-PblYntsL._AC_SL1500_.jpg',
            'product_id' => 53
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://exitocol.vtexassets.com/arquivos/ids/2458636/consola-nintendo-switch-neon-joycon-nueva-version-2019.jpg?v=637298193777070000',
            'product_id' => 53
        ]);


        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://i.blogs.es/358955/botones-chromecast/1366_2000.jpg',
            'product_id' => 54
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://i.blogs.es/2d9b84/google-chromecast/1366_2000.jpg',
            'product_id' => 54
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://falabella.scene7.com/is/image/FalabellaCO/3939877_1?wid=800&hei=800&qlt=70',
            'product_id' => 55
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/1/9/190199246850_2.jpg',
            'product_id' => 55
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/61Zpv2Ttt3L._AC_SY450_.jpg',
            'product_id' => 56
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://i.blogs.es/c42e98/xiaomi-mi-smart-band-6-3/840_560.jpg',
            'product_id' => 56
        ]);


        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://cdn.imusa.com.co/resources/2019/12/bateria-aa-talentt.jpg',
            'product_id' => 57
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/7/7/7702073585028_-_bateri_a_12_pz_aa_tv_talent_master_2.jpg',
            'product_id' => 57
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://cdn.imusa.com.co/resources/2020/04/03-31-Horno3en1-Imusa.png',
            'product_id' => 58
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/3/0/3016661154409_003.jpg',
            'product_id' => 58
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://cdn.imusa.com.co/resources/2017/11/5861024225.jpg',
            'product_id' => 59
        ]);
        DB::table('images')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'url' => 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/7/7/7777aaaaaaaaaaaaaaaaaaaaaa702073802859_imusa-infinity.jpg',
            'product_id' => 59
        ]);
    }
}
