<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Series::class, function (Faker\Generator $faker) {
    return [
        'reference' => 'SER.REF',
        'name' => 'Example series name',
        'description' => 'Example series description',
        'transfer_status' => 'Example transfer status',
        'type' => 'Example transfer type',
        'collection_id' => '1'
    ];
});

$factory->define(App\Batch::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Example batch name',
        'series_id' => '1',
        'type' => 'Example batch type',
        'received' => $faker->dateTimeBetween($statDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get())
    ];
});

$factory->define(App\Record::class, function (Faker\Generator $faker) {
    return [
        'reference' => 'REC.REF',
        'title' => 'Example record title',
        'description' => 'Example record descrription',
        'covering_date' => 'Example record covering date',
        'document_is_open' => true,
        'description_is_open' => true,
        'closure_status_description' => 'Example closure status description',
        'legal_status' => 'Example legal status'
    ];
});