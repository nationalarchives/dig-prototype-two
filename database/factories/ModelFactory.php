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
        'reference' => 'BT95',
        'name' => 'Board of Trade: Companies Registration Office: Files of Dissolved Companies',
        'description' => '	
The Companies Registration Office classified index provides particulars of dissolved exempt private companies. They contain administrative summary information regarding the dissolved company. The summary information concerns mainly the capital and the area of the company work. These were maintained in paper format until 1986. From 1986, computerised databases were used to record the information: the STEM and PUBL databases',
        'transfer_status' => 'Schema agreed',
        'type' => 'Born Digital',
        'collection_id' => '1'
    ];
});

$factory->define(App\Batch::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Unnamed batch',
        'series_id' => '1',
        'type' => 'Born digital',
        'received' => $faker->dateTimeBetween($statDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get())
    ];
});

$factory->define(App\Record::class, function (Faker\Generator $faker) {
    return [
        'reference' => $faker->numerify('BT##/##'),
        'title' => 'Companies dissolved in 1924-1963: Nos 13043-20971 (incorporated 1879-1885)',
        'description' => 'Companies dissolved in 1924-1963: Nos 13043-20971 (incorporated 1879-1885)',
        'covering_date' => '1879 May 09 - 1963 Dec 31',
        'document_is_open' => true,
        'description_is_open' => true,
        'closure_status_description' => 'Open Document',
        'legal_status' => 'Public record'
    ];
});