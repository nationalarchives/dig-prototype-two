<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Collection::all() as $collection) {
            $series = factory(App\Series::class, rand(1, 8))->create(['collection_id' => $collection->id]);
        }
    }
}
