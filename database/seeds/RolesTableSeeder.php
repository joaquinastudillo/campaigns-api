<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => json_encode([
                'create-campaign' => true,
                'assign-campaign' => true
            ])
        ]);

        $supervisor = Role::create([
            'name' => 'Supervisor',
            'slug' => 'supervisor',
            'permissions' => json_encode([
                'edit-campaign' => true
            ])
        ]);
    }
}
