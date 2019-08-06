<?php

use Illuminate\Database\Seeder;
use App\Models\Urun;
use App\Models\UrunDetay;
class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
 DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Urun::truncate();
        UrunDetay::truncate();
        for($i=0 ; $i<30 ; $i++)
        {
            $urun_adi=$faker->sentence(2);
            $urun=Urun::create([
            'urun_adi'=>$urun_adi,
            'slug'=>str_slug($urun_adi),
            'aciklama'=>$faker->sentence(20),
            'fiyati'=>$faker->randomFloat(3,1,20),
            'indirimli_fiyati'=>$faker->randomFloat(3,1,20),
            'yildiz_sayisi'=>rand(0,5)
            ]);

            $detay=$urun->detay()->create([
             
            
             'yeni_sezon'=>rand(0,1),
             'trendler'=>rand(0,1),
             'yaz_ayakkabilari'=>rand(0,1),
             'cok_satan'=>rand(0,1),
             'futbol'=>rand(0,1),
             'basketbol'=>rand(0,1),
             'anneler_günü'=>rand(0,1),
             'kadin'=>rand(0,1),
             'cocuk'=>rand(0,1),
             'yeni'=>rand(0,1),
             'urun_resmi'=>rand(0,1),
      


            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
