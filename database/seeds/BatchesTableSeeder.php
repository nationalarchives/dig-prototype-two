<?php

use Illuminate\Database\Seeder;

class BatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Series::all() as $series) {
            $batch = factory(App\Batch::class, rand(1, 5))->create(['series_id' => $series->id]);
        }
    }
}
