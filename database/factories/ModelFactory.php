<?php
/**
 * モデルファクトリ
 */
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'last_kana' => 'みょうじ',
        'first_kana' => 'なまえ',
        'gender' => rand(1, 2),
        'birthday' => $faker->date(),
        'post_code' => '123-4567',
        'pref_id' => 1,
        'address' => $faker->address,
        'tel' => '03-1234-5678',
        'mobile' => '080-1234-5678',
        'email' => $faker->email,
    ];
});
