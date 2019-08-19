<?php

use Illuminate\Database\Seeder;
use App\Models\Coupon;
class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
             Coupon::truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');


             for($i=0 ; $i<30 ; $i++)
        {
            $fakr=$faker->sentence(2);
            $coupon=Coupon::create([
            'code'=>md5($fakr),
            'is_percent'=>rand(0,1),
            'is_active'=>rand(0,1)
            ]);
          
        }
    }
}