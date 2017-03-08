<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            ['name' => 'водитель'],
            ['name' => 'диспетчер'],
            ['name' => 'механик'],
            ['name' => 'заправщик'],
        ]);
    }
}
