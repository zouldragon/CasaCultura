<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'mario osorio urias',
            'email' => 'conkers_65@hotmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
