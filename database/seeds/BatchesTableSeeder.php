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
            $batch = factory(App\Batch::class, rand(1, 2))->create([
                'series_id' => $series->id,
                'name' => $series->reference . 'Y17B00',
                'path_to_schema_file' => $series->reference . 'Y17B000' . '.csvs',
                'path_to_metadata_file' => false,
            ]);
        }
    }
}
