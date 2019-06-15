<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            [
                'name' => 'Deep Clean Shoes',   
            ],
            [
                'name' => 'Additional Treatment',   
            ],
            [
                'name' => 'Bag and Accessories',   
            ]
        ]);
    }
}
