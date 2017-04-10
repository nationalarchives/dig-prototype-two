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
            factory(App\Batch::class)->create([
                'series_id' => $series->id,
                'name' => $series->reference . 'Y17B001',
                'path_to_schema_file' => 'metadata_v9_' . $series->reference . 'Y17B0001' . '.csvs',
                'path_to_metadata_file' => false,
            ]);

            factory(App\Batch::class)->create([
                'series_id' => $series->id,
                'name' => $series->reference . 'Y17B002',
                'path_to_schema_file' => 'metadata_v9_' . $series->reference . 'Y17B0002' . '.csvs',
                'path_to_metadata_file' => 'something.csv',
            ]);

        }
    }
}
