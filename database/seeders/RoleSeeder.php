<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role1 = Role::create(['name' => 'Blogger']); 

         Permission::create(['name' => 'admin.home', 'description' => 'Ver dashboard'])->syncRoles([$role,$role1]);

         Permission::create(['name' => 'admin.users.index', 'description' => 'Ver lista de usuario'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar rol'])->syncRoles([$role]);

         Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver lista de Roles'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear rol'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar rol'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar rol'])->syncRoles([$role]);

         Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver lista de categorias'])->syncRoles([$role, $role1]);
         Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear categoria'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar categoria'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categoria'])->syncRoles([$role]);

         Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver una lista de Etiquetas'])->syncRoles([$role, $role1]);
         Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear etiqueta'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar etiqueta'])->syncRoles([$role]);
         Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar etiqueta'])->syncRoles([$role]);

         Permission::create(['name' => 'admin.posts.index', 'description' => 'ver una lista de Post'])->syncRoles([$role,$role1]);
         Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])->syncRoles([$role,$role1]);
         Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar post'])->syncRoles([$role,$role1]);
         Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])->syncRoles([$role,$role1]);
    }
}
