<?php

use Illuminate\Database\Seeder;
use App\Role;

class CreateRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'Administrator'; // optional
		$admin->description  = 'User is allowed to manage and edit other users'; // optional
		$admin->save();

        $owner = new Role();
		$owner->name         = 'user';
		$owner->display_name = 'Użytkownik'; // optional
		$owner->description  = 'User is the owner of a given project'; // optional
		$owner->save();
    }
}
