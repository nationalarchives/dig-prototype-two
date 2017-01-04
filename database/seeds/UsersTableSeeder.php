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
            'name' => 'Example user',
            'email' => 'example@example.gov',
            'password' => bcrypt('password'),
            'department_id' => 1
        ]);
    }
}
