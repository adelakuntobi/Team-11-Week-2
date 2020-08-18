<?php

use Illuminate\Database\Seeder;
use App\User;
// use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'firstname' => 'Sola',
            'lastname' => 'Olagunju',
            'email' => 'adv@mail.com',
            'password' =>bcrypt('Sola'),
            'type' => 'admin',
        ]
        );
        User::create([
            'firstname' => 'tola',
            'lastname' => 'macintosh',
            'email' => 'advs@mail.com',
            'password' =>bcrypt('John'),
        ]
        );
    }
}
