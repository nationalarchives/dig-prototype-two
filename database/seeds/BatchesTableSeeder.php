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
        DB::table('batches')->insert([
            'name' => 'First batch of series',
            'series_id' => '1',
            'type' => 'Born digital'
        ]);
    }
}
