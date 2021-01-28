<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            CompanySeeder::class,
        ]);
        $user = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'comercial@medioseureka.com',
            'password' => Hash::make('secret'),
            'company_id' => 1,
        ]);

        Role::create(['name' => 'super-admin']);
        $user->assignRole('super-admin');
    }
}
