<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (RoleFactory::ROLES as $roleName) {
            $role = Role::create([
                'name' => $roleName,
            ]);

            $numberOfUsers = $roleName === "Admin" ? 3 : ($roleName === "Writer" ? 10 : 30);

            User::factory($numberOfUsers)->create([
                'role_id' => $role->id
            ]);
        }

        // dodavanje jednog korisnika za testiranje
        User::factory()->create([
            'firstName' => 'Test',
            'lastName' => 'Member',
            'email' => 'test@member.com',
            'password' => Hash::make('123'),
            'role_id' => $role->id
        ]);
    }
}