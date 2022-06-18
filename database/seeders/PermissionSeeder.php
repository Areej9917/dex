<?php

namespace Database\Seeders;


use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $items = [
            ['name' => 'dashboard','display_name' =>'Dashboard','guard_name'=> 'web'],
            ['name' => 'user-create','display_name' =>'User Create','guard_name'=> 'web'],
            ['name' => 'user-list','display_name' =>'User List','guard_name'=> 'web'],
            ['name' => 'role-create','display_name' =>'Role Create','guard_name'=> 'web'],
            ['name' => 'role-list','display_name' =>'Role List','guard_name'=> 'web'],
            ];

       foreach ($items as $item) {
        Permission::updateOrCreate(['name' => $item['name']], $item);
}
    
    }
}
