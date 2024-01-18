<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders_products')->delete();
        
        \DB::table('orders_products')->insert(array (
            0 => 
            array (
                'op_id' => 1,
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 10,
            ),
            1 => 
            array (
                'op_id' => 2,
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 10,
            ),
            2 => 
            array (
                'op_id' => 3,
                'order_id' => 2,
                'product_id' => 3,
                'quantity' => 5,
            ),
            3 => 
            array (
                'op_id' => 4,
                'order_id' => 2,
                'product_id' => 4,
                'quantity' => 4,
            ),
            4 => 
            array (
                'op_id' => 5,
                'order_id' => 3,
                'product_id' => 4,
                'quantity' => 20,
            ),
            5 => 
            array (
                'op_id' => 6,
                'order_id' => 4,
                'product_id' => 3,
                'quantity' => 10,
            ),
            6 => 
            array (
                'op_id' => 7,
                'order_id' => 5,
                'product_id' => 2,
                'quantity' => 10,
            ),
            7 => 
            array (
                'op_id' => 8,
                'order_id' => 6,
                'product_id' => 1,
                'quantity' => 4,
            ),
            8 => 
            array (
                'op_id' => 9,
                'order_id' => 6,
                'product_id' => 2,
                'quantity' => 4,
            ),
            9 => 
            array (
                'op_id' => 10,
                'order_id' => 6,
                'product_id' => 4,
                'quantity' => 4,
            ),
            10 => 
            array (
                'op_id' => 11,
                'order_id' => 7,
                'product_id' => 1,
                'quantity' => 4,
            ),
            11 => 
            array (
                'op_id' => 12,
                'order_id' => 7,
                'product_id' => 3,
                'quantity' => 3,
            ),
            12 => 
            array (
                'op_id' => 13,
                'order_id' => 7,
                'product_id' => 4,
                'quantity' => 6,
            ),
            13 => 
            array (
                'op_id' => 14,
                'order_id' => 8,
                'product_id' => 2,
                'quantity' => 4,
            ),
            14 => 
            array (
                'op_id' => 15,
                'order_id' => 9,
                'product_id' => 1,
                'quantity' => 15,
            ),
            15 => 
            array (
                'op_id' => 16,
                'order_id' => 9,
                'product_id' => 4,
                'quantity' => 5,
            ),
            16 => 
            array (
                'op_id' => 17,
                'order_id' => 10,
                'product_id' => 1,
                'quantity' => 6,
            ),
            17 => 
            array (
                'op_id' => 18,
                'order_id' => 11,
                'product_id' => 1,
                'quantity' => 1,
            ),
            18 => 
            array (
                'op_id' => 19,
                'order_id' => 11,
                'product_id' => 3,
                'quantity' => 2,
            ),
            19 => 
            array (
                'op_id' => 20,
                'order_id' => 11,
                'product_id' => 4,
                'quantity' => 4,
            ),
            20 => 
            array (
                'op_id' => 21,
                'order_id' => 12,
                'product_id' => 4,
                'quantity' => 1,
            ),
            21 => 
            array (
                'op_id' => 22,
                'order_id' => 12,
                'product_id' => 6,
                'quantity' => 1,
            ),
        ));
        
        
    }
}