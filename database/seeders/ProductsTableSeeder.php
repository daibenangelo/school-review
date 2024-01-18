<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'name' => 'Burger',
                'price' => 55.0,
                'image' => 'burger.webp',
                'stock' => 82,
            ),
            1 => 
            array (
                'product_id' => 2,
                'name' => 'Fried Chicken',
                'price' => 90.0,
                'image' => 'chicken.jpg',
                'stock' => 200,
            ),
            2 => 
            array (
                'product_id' => 3,
                'name' => 'Tusilog',
                'price' => 50.0,
                'image' => 'tusilog.jpg',
                'stock' => 85,
            ),
            3 => 
            array (
                'product_id' => 4,
                'name' => 'Mountain Dew',
                'price' => 25.0,
                'image' => 'mtndew.webp',
                'stock' => 75,
            ),
            4 => 
            array (
                'product_id' => 6,
                'name' => 'Ensaymada',
                'price' => 85.0,
                'image' => '202307130300000000ensaymada.jpg',
                'stock' => 100,
            ),
        ));
        
        
    }
}