<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Batch::all() as $batch) {
            $record = factory(App\Record::class, rand(5, 20))->create(['batch_id' => $batch->id]);
        }
    }
}
