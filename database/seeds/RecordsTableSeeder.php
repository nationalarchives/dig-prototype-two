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
        DB::table('records')->insert([
            'batch_id' => 1,
            'reference' => 'BT95/98',
            'title' => 'Companies dissolved in 1924-1963: Nos 13043-20971 (incorporated 1879-1885)',
            'description' => 'Companies dissolved in 1924-1963: Nos 13043-20971 (incorporated 1879-1885)',
            'covering_date' => '1879 May 09 - 1963 Dec 31',
            'document_is_open' => true,
            'description_is_open' => true,
            'closure_status_description' => 'Open Document',
            'legal_status' => 'Public record'
        ]);
    }
}
