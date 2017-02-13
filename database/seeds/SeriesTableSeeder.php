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
            factory(App\Series::class)->create([
                'collection_id' => $collection->id,
                'reference' => 'RW33',
                'name' => 'Records of the Preservation and Digital Preservation Department',
                'description' => '	
The series contains digital records created in the Preservation area of The National Archives functional electronic file plan used between 2003 and 2008; the records would have been predominantly created by the various Preservation and Digital Preservation departments. This function concerns the devising and promulgating of pro-active and preventative strategies for the preservation of both government and non-public archival records. This involves managing the integrity and usability of all records, traditional and digital, in The National Archives. It includes developing internal and external preservation strategies and systems, researching physical and chemical properties of materials, and applying conservation techniques.'
            ]);
        }
    }
}
