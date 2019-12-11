<?php

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
        $this->createRoles();
        $this->createDefaultAdmin();
    }

    public function createRoles(){

        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Admin',
                'slug'        => 'admin',
            ]
        );
    }

    public function createUsers(){

    }

    public function createDefaultAdmin(){
        $credentials = [
            'username' => 'admin',
            'password' => 'admin123',
            'name' => 'Admin',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('admin');
        $user->roles()->attach($role);
    }
}
