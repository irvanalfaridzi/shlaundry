<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'category_id' => '1',
                'code' => 'Shc-S1001',
                'name' => 'All variant',
                'price' => '35000',
                'Description' => '-',   
            ],
            [
                'category_id' => '1',
                'code' => 'Shc-S1002',
                'name' => 'One day Service',
                'price' => '40000',
                'Description' => '-',  
            ],
            [
                'category_id' => '1',
                'code' => 'Shc-S1003',
                'name' => 'Express (2 jam)',
                'price' => '45000',
                'Description' => '-',  
            ],
            [
                'category_id' => '1',
                'code' => 'Shc-S1004',
                'name' => 'Kid shoes',
                'price' => '25000',
                'Description' => '-',  
            ],
            [
                'category_id' => '2',
                'code' => 'Shc-S2001',
                'name' => 'Unyellowing midsole',
                'price' => '35000',
                'Description' => '-',  
            ],
            [
                'category_id' => '2',
                'code' => 'Shc-S2002',
                'name' => 'Unyellowing upper',
                'price' => '35000',
                'Description' => '-',  
            ],
            [
                'category_id' => '2',
                'code' => 'Shc-S2003',
                'name' => 'Recolour (DC Include)',
                'price' => '100000',
                'Description' => '-',  
            ],
            [
                'category_id' => '2',
                'code' => 'Shc-S2004',
                'name' => 'Change Colour',
                'price' => '130000',
                'Description' => '-',  
            ],
            [
                'category_id' => '2',
                'code' => 'Shc-S2005',
                'name' => 'Repair',
                'price' => '35000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3001',
                'name' => 'Sling bag',
                'price' => '35000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3002',
                'name' => 'Backpack',
                'price' => '45000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3003',
                'name' => 'Hand Bag',
                'price' => '40000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3004',
                'name' => 'Briefcase',
                'price' => '50000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3005',
                'name' => 'Hats',
                'price' => '25000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3006',
                'name' => 'Wallet',
                'price' => '25000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3007',
                'name' => 'Sandals',
                'price' => '25000',
                'Description' => '-',  
            ],
            [
                'category_id' => '3',
                'code' => 'Shc-S3008',
                'name' => 'Leather Goods',
                'price' => '25000',
                'Description' => '-',  
            ]
        ]);
    }
}
