<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 2,
                'first_name' => 'Patricia',
                'last_name' => 'Hamilton',
                'email' => 'practice@gmail.com',
                'password' => '$2y$10$6J8GuEvAnc/tRbt9cNQwuOa91CQiQFA3uRrcv37l17P7SKqDA23AG',
                'role' => 'user',
                'image' => 'blank_profile.webp',
                'student_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 4,
                'first_name' => 'Daiben',
                'last_name' => 'Sanchez',
                'email' => 'daibenangelosanchez@gmail.com',
                'password' => '$2y$10$NNt7G.hUnJhXzi/1WzoLX.sSE6Ev3zTCkhETdAsr2sEuKEkHMT8xm',
                'role' => 'user',
                'image' => 'blank_profile.webp',
                'student_id' => 2,
            ),
            2 => 
            array (
                'user_id' => 5,
                'first_name' => 'Manny',
                'last_name' => 'Pacquiao',
                'email' => '13e1221@gmail.com',
                'password' => '$2y$10$TYRGz3dn6zw285Gtf6hODuyGV.2TVLXIboKeZFrqll.cwGyVF8rii',
                'role' => 'user',
                'image' => 'blank_profile.webp',
                'student_id' => 3,
            ),
            3 => 
            array (
                'user_id' => 6,
                'first_name' => 'Daiben',
                'last_name' => 'Sanchez',
                'email' => 'admin@iscp.com',
                'password' => '$2y$10$X2RR6m0J2hOZ1/F8Y5gt6uo3GJutrVaDd6wKDyTNcn75vi8MWVjdW',
                'role' => 'admin',
                'image' => 'blank_profile.webp',
                'student_id' => 0,
            ),
            4 => 
            array (
                'user_id' => 7,
                'first_name' => 'Floyd',
                'last_name' => 'Mayweather',
                'email' => 'fm@gmail.com',
                'password' => 'fm@gmail.com',
                'role' => 'user',
                'image' => 'blank_profile.webp',
                'student_id' => 2000,
            ),
            5 => 
            array (
                'user_id' => 8,
                'first_name' => 'Christian',
                'last_name' => 'Bale',
                'email' => 'cb@gmail.com',
                'password' => '$2y$10$QSIeTALiOJcbdhliR7xtAO5RUGkTt9EMB.Ew1Of5PU5MJZTXBwBvy',
                'role' => 'user',
                'image' => 'blank_profile.webp',
                'student_id' => 2001,
            ),
            6 => 
            array (
                'user_id' => 9,
                'first_name' => 'Bruce',
                'last_name' => 'Lee',
                'email' => 'dddd@gmail.com',
                'password' => '$2y$10$o/j1Pk2.Y8/eU1nOOrq9g.JwNQ8Tzty7p.wnPgc8cz/JQBSL8gcoC',
                'role' => 'user',
                'image' => '202307130354000000🥊.jpg',
                'student_id' => 2002,
            ),
            7 => 
            array (
                'user_id' => 10,
                'first_name' => 'Anthony',
                'last_name' => 'Ben',
                'email' => 'antben@gmail.com',
                'password' => '$2y$10$UWYNQPqZEb/AOvtkBGNco.8XKN.VmIDAiOATU77KkRKVKTea7ry7C',
                'role' => 'admin',
                'image' => 'blank_profile.webp',
                'student_id' => 0,
            ),
            8 => 
            array (
                'user_id' => 11,
                'first_name' => 'Michael',
                'last_name' => 'V',
                'email' => 'v@gmail.com',
                'password' => '$2y$10$.Y35cZEQ8l3C/cJQJMbHYu.3SbFqOMNlLO78madDGlBcAw5gav92a',
                'role' => 'user',
                'image' => 'blank_profile.webp',
                'student_id' => 2003,
            ),
        ));
        
        
    }
}