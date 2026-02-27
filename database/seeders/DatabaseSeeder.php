<?php

namespace Database\Seeders;


use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Role::create(['name' => 'admin', 'description' => 'Administrator with full permissions']);
        Role::create(['name' => 'author', 'description' => 'Author with permissions to create and manage their own content']);

        Permission::create(['name' => 'create_author', 'description' => 'Permission to create new authors']);
        Permission::create(['name' => 'edit_author', 'description' => 'Permission to edit existing authors']);
        Permission::create(['name' => 'delete_author', 'description' => 'Permission to delete authors']);

        Permission::create(['name' => 'create_post', 'description' => 'Permission to create new posts']);
        Permission::create(['name' => 'edit_post', 'description' => 'Permission to edit existing posts']);
        Permission::create(['name' => 'delete_post', 'description' => 'Permission to delete posts']);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
