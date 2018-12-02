<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
    	'user_id' => $faker->numberBetween(1, 5),
        'headline' => $faker->jobTitle,
		'content' => $faker->text($maxNbChars = 1000),
		'img' => $faker->imageUrl(750, 300)
	];
});
$factory->define(App\Models\Contact::class, function (Faker $faker) {
	return [
		'type' => $faker->word,
		'value' => $faker->phoneNumber
	];
});
$factory->define(App\Models\Service::class, function (Faker $faker) {
	return [
		'name' => $faker->jobTitle,
		'value' => $faker->text(200)
	];
});
$factory->define(App\Models\User::class, function (Faker $faker) {
	return [
		'name' => $faker->name
	];
});
$factory->define(App\Models\Category::class, function (Faker $faker) {
	return [
		'title' => $faker->colorName,
		'key' => $faker->slug
	];
});