<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name'    => 'Medios Eureka',
            'email'   => 'comercial@medioseureka.com',
            'address' => 'Calle 27 # 27 13',
            'phone1'  => '3116384957',
            'contact' => 'Andrés Clavijo',
            'nit'     => '901.209.442-1',
        ]);
    }
}
