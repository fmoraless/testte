<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
           'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega los usuarios de sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'Ver detalle de cada usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Edición de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar datos de usuarios de sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Elimina usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name' => 'Navegar Roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega los roles de sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de Rol',
            'slug' => 'roles.show',
            'description' => 'Ver detalle de cada rol del sistema',
        ]);

        Permission::create([
            'name' => 'Creación de Roles',
            'slug' => 'roles.create',
            'description' => 'Editar datos de rol de sistema',
        ]);

        Permission::create([
            'name' => 'Edición de Rol',
            'slug' => 'roles.edit',
            'description' => 'Editar datos de rol de sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Elimina rol del sistema',
        ]);

        //Procesos
        Permission::create([
            'name' => 'Navegar Procesos',
            'slug' => 'procesos.index',
            'description' => 'Lista y navega los procesos de sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de proceso',
            'slug' => 'procesos.show',
            'description' => 'Ver detalle de cada proceso del sistema',
        ]);

        Permission::create([
            'name' => 'Creación de proceso',
            'slug' => 'procesos.create',
            'description' => 'Editar datos de proceso de sistema',
        ]);

        Permission::create([
            'name' => 'Edición de proceso',
            'slug' => 'procesos.edit',
            'description' => 'Editar datos de rol de sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar proceso',
            'slug' => 'procesos.destroy',
            'description' => 'Elimina proceso del sistema',
        ]);
    }
}
