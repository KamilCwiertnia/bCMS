<?php

use Illuminate\Database\Seeder;
use App\Role;

class CreateUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = "Kamil";
        $user->surname = "Ćwiertnia";
        $user->email = "kamilcw@gmail.com";
        $user->password = bcrypt("admin123");
        $user->avatar = "default.png";
        $user->save();
        $user->roles()->attach(1);
    }
}
