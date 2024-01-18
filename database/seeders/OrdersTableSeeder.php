<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'order_id' => 2,
                'time_placed' => '2023-07-10 15:45:35',
                'status' => 'cancelled',
                'user_id' => 9,
            ),
            1 => 
            array (
                'order_id' => 3,
                'time_placed' => '2023-07-10 15:48:09',
                'status' => 'accepted',
                'user_id' => 9,
            ),
            2 => 
            array (
                'order_id' => 4,
                'time_placed' => '2023-07-10 16:21:11',
                'status' => 'accepted',
                'user_id' => 2,
            ),
            3 => 
            array (
                'order_id' => 5,
                'time_placed' => '2023-07-11 13:32:13',
                'status' => 'cancelled',
                'user_id' => 9,
            ),
            4 => 
            array (
                'order_id' => 6,
                'time_placed' => '2023-07-11 14:51:51',
                'status' => 'cancelled',
                'user_id' => 9,
            ),
            5 => 
            array (
                'order_id' => 7,
                'time_placed' => '2023-07-12 15:19:09',
                'status' => 'received',
                'user_id' => 9,
            ),
            6 => 
            array (
                'order_id' => 8,
                'time_placed' => '2023-07-12 16:41:37',
                'status' => 'cancelled',
                'user_id' => 9,
            ),
            7 => 
            array (
                'order_id' => 9,
                'time_placed' => '2023-07-12 16:44:49',
                'status' => 'received',
                'user_id' => 9,
            ),
            8 => 
            array (
                'order_id' => 10,
                'time_placed' => '2023-07-12 17:21:49',
                'status' => 'cancelled',
                'user_id' => 9,
            ),
            9 => 
            array (
                'order_id' => 11,
                'time_placed' => '2023-07-13 09:43:27',
                'status' => 'received',
                'user_id' => 11,
            ),
            10 => 
            array (
                'order_id' => 12,
                'time_placed' => '2023-07-13 11:23:23',
                'status' => 'waiting',
                'user_id' => 9,
            ),
        ));
        
        
    }
}