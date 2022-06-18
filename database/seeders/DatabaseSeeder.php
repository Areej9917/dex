<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role->name = 'super-admin';
        $role->display_name = 'Super Admin';
        $role->guard_name = 'web';
        $role->save();

    

        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->name = 'admin';
        $user->username = 'superadmin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin123');
        $user->save();

        $user->assignRole('super-admin');


        $this->call([
        
            PermissionSeeder::class,
       
        ]);
    }
}
