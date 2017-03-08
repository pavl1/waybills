<?php

use Illuminate\Database\Seeder;

class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Auto::class, 5)
            ->create()
            ->each( function ($a) {
                    $employers = range(1, 10);
                    shuffle($employers);
                    $employers = array_slice($employers, 0, 3);
                    $a->employers()->sync($employers);
                }
            );
    }
}
