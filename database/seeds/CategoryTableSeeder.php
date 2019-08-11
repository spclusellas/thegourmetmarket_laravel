<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
       {
           if (!DB::table('categories')->exists()) {
               DB::table('categories')->insert([
                   'name' => 'Organicos'
               ]);
               DB::table('categories')->insert([
                   'name' => 'Vinos'
               ]);
               DB::table('categories')->insert([
                   'name' => 'Alacena'
               ]);
               DB::table('categories')->insert([
                   'name' => 'Snacks'
               ]);
               DB::table('categories')->insert([
                   'name' => 'Hogar'
               ]);
               DB::table('categories')->insert([
                   'name' => 'Otra'
               ]);
           }

       }
}
