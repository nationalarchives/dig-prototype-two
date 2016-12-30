<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DepartmentsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(CollectionTableSeeder::class);
         $this->call(SeriesTableSeeder::class);
         $this->call(BatchesTableSeeder::class);
         $this->call(RecordsTableSeeder::class);
    }
}
