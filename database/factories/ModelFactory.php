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


$factory->define(App\Parents::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'user_name' => $faker->userName,
        'work_place' => $faker->company,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'position' => $faker->jobTitle,
        'email' => $faker->unique()->safeEmail,
        'payment_type_id' => 1,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});


$factory->define(App\Child::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'user_name' => $faker->userName,
        'school_name' => $faker->company,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'parents_id' => function () {
            return App\Parents::inRandomOrder()->first()->id;
        },
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});


$factory->define(App\Teacher::class, function (Faker\Generator $faker) {
    static $password;
    $positions = ['senior', 'junior', 'assistant'];
    return [
        'name' => $faker->name,
        'user_name' => $faker->userName,
        'position' => $positions[array_rand($positions)],
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});


$factory->define(App\ChildTeacher::class, function (Faker\Generator $faker) {
    return [
        'child_id' => function() {
            return App\Child::inRandomOrder()->first()->id;
        },

        'teacher_id' => function() {
            return App\Teacher::inRandomOrder()->first()->id;
        },
    ];
});


$factory->define(App\ChildSubject::class, function (Faker\Generator $faker) {
    return [
        'child_id' => function() {
            return App\Child::inRandomOrder()->first()->id;
        },

        'subject_id' => function() {
            return App\Subject::inRandomOrder()->first()->id;
        },
    ];
});





