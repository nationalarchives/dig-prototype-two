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
        factory(App\Collection::class, 1)->create([
            'reference' => 'TNARC',
            'name' => 'TNA Corporate Records'
        ]);
    }
}
