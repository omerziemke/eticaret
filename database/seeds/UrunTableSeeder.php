<?php

use Illuminate\Database\Seeder;
use App\Models\Urun;
use App\Models\UrunDetay;
use App\Models\ProductTranslation;
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
         ProductTranslation::truncate();
          DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    
        for($i=0 ; $i<30 ; $i++)
        {
            $urun_adi=$faker->sentence(2);
            $urun=Urun::create([
            'price'=>$faker->randomFloat(3,1,20),
            'slug'=>str_slug($urun_adi),
            'manage_stock'=>rand(0,1),
            'in_stock'=>rand(0,1),
            'is_active'=>rand(0,1)
            ]);
          
            $product_translation = new ProductTranslation([
             'name'=>$urun_adi,
             'locale'=>$faker->sentence(5),
             'description'=>$faker->sentence(20)
            ]);
            $product_translation->urun()->associate($urun)->save();
           
           
        }
       
    }
}
