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
        DB::table('series')->insert([
            'reference' => 'BT95',
            'name' => 'Board of Trade: Companies Registration Office: Classified Index (\'Classi Sheets\') to Files of Dissolved Exempt Private Companies',
            'description' => '	
The Companies Registration Office classified index provides particulars of dissolved exempt private companies. They contain administrative summary information regarding the dissolved company. The summary information concerns mainly the capital and the area of the company work. These were maintained in paper format until 1986. From 1986, computerised databases were used to record the information: the STEM and PUBL databases.
This series is a hybrid series that contains paper and digital files (2525 volumes and 2 digital files).',
            'transfer_status' => 'Schema agreed',
            'type' => 'Born digital',
            'collection_id' => 1
        ]);
    }
}
