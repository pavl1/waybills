<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Моя компания',
            'requisites' => json_encode(array(
            	'address' => 'Адрес',
            	'phone' => '8(3952)000-000'
            ))
        ]);
    }
}
