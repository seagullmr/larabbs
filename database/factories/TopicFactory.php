<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
    $secntence = $faker->sentence();

    // 随机取出一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();

    // 传参为生成最大时间不超过，因为创建时间需永远比更新时间早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'title' => $secntence,
        'body' => $faker->text(),
        'excerpt' => $secntence,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
