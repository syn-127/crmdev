<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::updateOrCreate(['id' => 1], [
            'name' => 'Clayton Sampere',
            'email' => 'xscript@me.com',
            'password' => '$2y$10$jQjRmuPEHRxARqI9Sd/cbODk9Rp1PNe8tL9aiz4f9aWqAl2TvDXWu' //Password
        ]);
    }
}
