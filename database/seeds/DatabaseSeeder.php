<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'mustak',
            'email' => 'mustak@gmail.com',
            'about' => 'Web developer',
            'role_id' => 1,
            'password' => bcrypt('12345678')
        ]);
    }
}
