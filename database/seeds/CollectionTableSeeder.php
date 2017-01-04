<?php

use Illuminate\Database\Seeder;

class CollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('collections')->insert([
                'reference' => 'COL.REF',
                'name' => 'Example collection name',
                'department_id' => 1
            ]);
        }
    }
}
