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

$factory->define(App\Collection::class, function (Faker\Generator $faker) {
    return [
        'reference' => strtoupper($faker->randomLetter . $faker->randomLetter) . $faker->randomNumber(3),
        'name' => 'A collection related to the Leveson Inquiry',
        'department_id' => 1
    ];
});

$factory->define(App\Series::class, function (Faker\Generator $faker) {
    return [
        'reference' => 'LEV3',
        'name' => 'Inquiry into the Culture, Practices and Ethics of the Press (The Leveson Inquiry): Judicial Reviews and Administrative Records',
        'description' => '	
This series consists of records relating to the administrative running of the Leveson Inquiry. Included are judicial reviews made during the Inquiry, logs of correspondence and policy on email management.',
        'type' => 'Born Digital',
        'collection_id' => '1'
    ];
});

$factory->define(App\Batch::class, function (Faker\Generator $faker) {
    return [
        'name' => 'XXY17B001',
        'series_id' => '1',
        'type' => $faker->randomElement(['Born Digital', 'Digitised']),
        'received' => $faker->dateTimeBetween($statDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'path_to_schema_file' => 'XXY17B000' . '.csvs'
    ];
});

// Make same as LEV 3/2/Z

$factory->define(App\Record::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->shuffle('aeioutrzeqwepyl') . '.' . $faker->randomElement(['xls', 'xml', 'doc', 'docx', 'xls', 'png', 'mp4']),
        'note' => '	The record opening date is calculated from 8 March 2012 which is the closure start date as recorded on the schedule approved by the Advisory Council on National Records and Archives in February 2014.',
        'covering_date' => '2011 Nov 09',
        'arrangement' => '	This born digital record was arranged under the following file structure: LEV 3 >> Judicial reviews',
        'document_is_open' => false,
        'description_is_open' => false,
        'closure_status_description' => 'Closed or retained document, Closed description',
        'legal_status' => 'Public record',
        'physical_description' => '1 digital record',
        'access_conditions' => 'Closed for 60 years',
        'foi_decision_date' => '2014',
        'exemption' => 'Personal information where the applicant is a 3rd party'
    ];
});