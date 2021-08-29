<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo Mobile',
            "price"=>"24500",
            "description"=>"dgggfhgfhfgdffdfsdfsdsdasdfdgertyh",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/WG/ZM/TG/ANDROID-98089178/product-jpeg-500x500.jpg"
            ],
            [
                
            'name'=>'Panasonic Tv',
            "price"=>"246700",
            "description"=>"dgggfhgfhfgdffdfsdfsdsdasdfdgertyh",
            "category"=>"Tv",
            "gallery"=>"https://www.sentinelassam.com/wp-content/uploads/2018/06/pannna-1.jpg"
            ]
            ,
            [
                
            'name'=>'Sony Tv',
            "price"=>"26700",
            "description"=>"dgggfhgfhfgdffdfsdfsdsdasdfdgertyh",
            "category"=>"Tv",
            "gallery"=>"https://static-01.daraz.pk/p/748ac96d6c5e5a8d389da1f6ee45b17a.jpg"
            ],
            [
                
            'name'=>'Haier Fridge',
            "price"=>"26700",
            "description"=>"dgggfhgfhfgdffdfsdfsdsdasdfdgertyh",
            "category"=>"Fridge",
            "gallery"=>"https://image.haier.com/pk/refrigerators/W020201102473628751778_350.jpg"
            ]
        ]);
    }
}
