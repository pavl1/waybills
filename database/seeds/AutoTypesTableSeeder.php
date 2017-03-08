<?php

use Illuminate\Database\Seeder;

class AutoTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auto_types')->insert([
            ['name' => 'легковой'],
            ['name' => 'грузовой'],
            ['name' => 'автобус'],
            ['name' => 'спецтехника'],
        ]);
    }
}
