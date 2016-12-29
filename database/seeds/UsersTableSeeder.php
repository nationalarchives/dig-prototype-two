<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gwyn Jones',
            'email' => 'gwyn.jones@nationalarchives.gsi.gov.uk',
            'password' => bcrypt('password'),
            'department_id' => 1
        ]);
    }
}
