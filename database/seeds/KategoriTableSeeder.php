<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table('main_categories')->truncate();
            DB::table('categories')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            
            DB::table('main_categories')->insert(['main_category_name'=>'Ekek','slug'=>'erkek' ]);
            DB::table('main_categories')->insert(['main_category_name'=>'Kadın','slug'=>'kadin']);
            DB::table('main_categories')->insert(['main_category_name'=>'Cocuk','slug'=>'cocuk']);
            DB::table('main_categories')->insert(['main_category_name'=>'Yeni','slug'=>'yeni']);



            DB::table('categories')->insert(['category_name'=>'Erkek Yeni Sezon','slug'=>'erkek-yeni-sezon','main_category_id' =>1]);
            DB::table('categories')->insert(['category_name'=>'Kadın Yeni Sezon','slug'=>'kadin-yeni-sezon','main_category_id' =>2]);
            DB::table('categories')->insert(['category_name'=>'Cocuk Yeni Sezon','slug'=>'cocuk-yeni-sezon','main_category_id' =>3]);
            DB::table('categories')->insert(['category_name'=>'Cok Satanlar','slug'=>'cok_satanlar','main_category_id'=>1]);
            DB::table('categories')->insert(['category_name'=>'Trendler','slug'=>'trendler','main_category_id'=>2]);
            DB::table('categories')->insert(['category_name'=>'Yaz Ayakkabıları','slug'=>'yaz-ayakkabilari','main_category_id'=>2]);
            DB::table('categories')->insert(['category_name'=>'Anneler Günü Koleksiyonu','slug'=>'anneler-günü-koleksiyonu','main_category_id'=>1]);
            DB::table('categories')->insert(['category_name'=>'Futbol','slug'=>'futbol','main_category_id'=>1]);
            
            

    
            
          
    }
    
}
