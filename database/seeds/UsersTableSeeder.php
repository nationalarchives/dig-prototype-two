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
            'password' => bcrypt('prototype2passw0rd'),
            'department_id' => 1
        ]);
    }
}
