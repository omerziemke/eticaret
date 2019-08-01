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
    {
         DB::table('kategoris')->truncate();
       $id= DB::table('kategoris')->insertGetId(['kategori_adi'=>'ERKEK','slug'=>'erkek']);
            DB::table('kategoris')->insert(['kategori_adi'=>'Yeni Sezon','slug'=>'yeni-sezon','ust_id'=>$id]);
            DB::table('kategoris')->insert(['kategori_adi'=>'Cok Satanlar','slug'=>'cok_satanlar','ust_id'=>$id]);
            DB::table('kategoris')->insert(['kategori_adi'=>'Trendler','slug'=>'trendler','ust_id'=>$id]);
            DB::table('kategoris')->insert(['kategori_adi'=>'Yaz Ayakkabıları','slug'=>'yaz-ayakkabilari','ust_id'=>$id]);
            DB::table('kategoris')->insert(['kategori_adi'=>'Anneler Günü Koleksiyonu','slug'=>'anneler-günü-koleksiyonu','ust_id'=>$id]);
            DB::table('kategoris')->insert(['kategori_adi'=>'Futbol','slug'=>'futbol','ust_id'=>$id]);
            DB::table('kategoris')->insert(['kategori_adi'=>'Basketbol','slug'=>'baskebol','ust_id'=>$id]);
            DB::table('kategoris')->insert(['kategori_adi'=>'Anneler Günü Koleksiyonu','slug'=>'anneler-günü-koleksiyonu','ust_id'=>$id]);
       

        DB::table('kategoris')->insert(['kategori_adi'=>'KADIN','slug'=>'kadin']);
        DB::table('kategoris')->insert(['kategori_adi'=>'COCUK','slug'=>'cocuk']);
        DB::table('kategoris')->insert(['kategori_adi'=>'YENİ','slug'=>'yeni']);
       
    }
    
}
