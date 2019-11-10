<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
           'name' => 'John Doe',
           'email'  => 'john@gmail.com',
           'password'  => '123456'
        ]);
    }
}
