<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomersTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductUnitsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
