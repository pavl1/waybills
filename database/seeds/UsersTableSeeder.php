<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Сергей Павленко',
            'email' => 'sergey@impress.io',
            'password' => bcrypt('P@ssw0rd'),
            'company_id' => 1
        ]);
    }
}
