<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i < 10;$i++){
            Product::create([
                'name' => 'Mobile '+$i,
                'price' => rand(15000,30000),
                'details' => 'SIM : Dual SIM (Nano-SIM, dual stand-by) BATTERY: Li-Po 6000 mAh, non-removable MAIN CAMERA (Triple): 13 MP, 2 MP, 2 MP',
                'model' => 'Model '.$i,
                'brand' => 'Mobile Brand',
            ])->categories()->attach(1);
        }
        for($i = 1;$i < 10;$i++){
            Product::create([
                'name' => 'Laptop '+$i,
                'price' => rand(50000,100000),
                'details' => 'As you have already learned, working with many-to-many relations requires the presence of an intermediate table.',
                'model' => 'Model '.$i,
                'brand' => 'Laptop Brand',
            ])->categories()->attach(2);
        }
    }
}
