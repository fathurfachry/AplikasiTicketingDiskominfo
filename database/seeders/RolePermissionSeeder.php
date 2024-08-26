<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'lihat-user']);

        Permission::create(['name' => 'lihat-ajuan']);
        Permission::create(['name' => 'tambah-ajuan']);
        Permission::create(['name' => 'edit-ajuan']);
        Permission::create(['name' => 'hapus-ajuan']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'tim']);

        $roleAdmin  = Role::findByName('admin');
        $roleAdmin -> givePermissionTo('tambah-user');
        $roleAdmin -> givePermissionTo('edit-user');
        $roleAdmin -> givePermissionTo('hapus-user');
        $roleAdmin -> givePermissionTo('lihat-user');

        $roleUser  = Role::findByName('user');
        $roleUser -> givePermissionTo('lihat-ajuan');
        $roleUser -> givePermissionTo('edit-ajuan');
        $roleUser -> givePermissionTo('hapus-ajuan');
        $roleUser -> givePermissionTo('tambah-ajuan');

        $roleTim = Role::findByName('tim');
        $roleTim -> givePermissionTo('lihat-ajuan');
        
    }
}
