<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompaniesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(EmployersTableSeeder::class);
        $this->call(AutoTypesTableSeeder::class);
        $this->call(AutosTableSeeder::class);
        $this->call(OrganizationTypesTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
    }
}
