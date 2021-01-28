<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // users
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'see users']);

        // reports
        Permission::create(['name' => 'create reports']);
        Permission::create(['name' => 'edit reports']);
        Permission::create(['name' => 'delete reports']);
        Permission::create(['name' => 'see reports']);

        // companies
        Permission::create(['name' => 'create companies']);
        Permission::create(['name' => 'edit companies']);
        Permission::create(['name' => 'delete companies']);
        Permission::create(['name' => 'see companies']);

        // observations
        Permission::create(['name' => 'create observations']);
        Permission::create(['name' => 'edit observations']);
        Permission::create(['name' => 'delete observations']);
        Permission::create(['name' => 'see observations']);

        // races
        Permission::create(['name' => 'create races']);
        Permission::create(['name' => 'edit races']);
        Permission::create(['name' => 'delete races']);
        Permission::create(['name' => 'see races']);

        // forms
        Permission::create(['name' => 'create forms']);
        Permission::create(['name' => 'edit forms']);
        Permission::create(['name' => 'delete forms']);
        Permission::create(['name' => 'see forms']);

        // vets
        Permission::create(['name' => 'create vets']);
        Permission::create(['name' => 'edit vets']);
        Permission::create(['name' => 'delete vets']);
        Permission::create(['name' => 'see vets']);


        // patients
        Permission::create(['name' => 'create patients']);
        Permission::create(['name' => 'edit patients']);
        Permission::create(['name' => 'delete patients']);
        Permission::create(['name' => 'see patients']);

        // tests
        Permission::create(['name' => 'create tests']);
        Permission::create(['name' => 'edit tests']);
        Permission::create(['name' => 'delete tests']);
        Permission::create(['name' => 'see tests']);
        Permission::create(['name' => 'see own tests']);
        Permission::create(['name' => 'return tests']);
    }
}
