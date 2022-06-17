<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"electronics",
                "sub_category"=>"mobiles",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"electronics",
                "sub_category"=>"TV",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
        ]);
    }
}
