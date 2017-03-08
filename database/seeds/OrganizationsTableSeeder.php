<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Organization::class, 10)
            ->create()
            ->each( function ($o) {
                    if ($o->type_id == 1) return;
                    else {
                        $autos = range(1, 5);
                        shuffle($autos);
                        $autos = array_slice($autos, 0, 3);
                        $o->autos()->sync($autos);
                    }
                }
        );
    }
}
