<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'admin',
            'username'  => 'admin',
            'email'     => 'admin@shz.id',
            'password'  => Hash::make('admin123'),
        ]);
    }
}
