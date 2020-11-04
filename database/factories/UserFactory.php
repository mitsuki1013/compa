<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'email' => $faker->unique()->email,
        'profile_img' => 'storage/profile_img/no-img/no-image.png',
        'password' => Hash::make('12345678'), 
        'pr_comment' => $faker->realText(50),
        'gender' => 0,
        'age' => $faker->numberBetween(1,41),
        'location' => $faker->numberBetween(1,47),
        'number_people' => $faker->numberBetween(1,10),
        'hobby' => $faker->randomElement($array=[
            '写真',
            '旅行',
            'サッカー',
            '野球',
            'バスケ',
            '陸上',
            '映画鑑賞',
            '陶芸',
            '水族館巡り',
            'コーヒー',
            'マラソン',
            'ダーツ',
            'ボウリング',
            '手品',
            '格闘技',
            '縄跳び',
            'FX',
            '映画鑑賞',
            'ホームシーシャ',
            'カクテル作り',
            '筋トレ',
            'ヨガ',
        ]),
        'job' => $faker->randomElement($array=[
            '看護師',
            '公務員',
            '学校の先生',
            '投資家',
            'フリーター',
            '大学生',
            '足つぼマッサージ師',
            '家具屋のオーナー',
            'スポーツ選手',
            'ラーメン屋さんの弟子',
            'ニトリのレジ',
            'タクシーの運転手',
            '大工さん',
            '管理栄養士',
            'キャビンアテンダント',
            '海上保安官',
            '消防士',
            '警察官',
            '社長',
            'エンジニア',
            '不動産管理会社',
            '薬剤師',
            'デザイナー',
            'タクシードライバー',
            '旅行会社',
            '工場勤務',
            '塾の講師',
            '家庭教師',
        ]),
        'smoking' => $faker->numberBetween(0,1),
        'day' => $faker->randomElement($array=[
            '土日',
            '火水木',
            '月水金',
            '火木土',
            '金土',
            '月火',
            '水日',
            '木金',
            '月金',
            '金',
            '土',
            '日',
            '月',
            '火',
            '水',
            '木',
        ]),
        'sake' => $faker->numberBetween(0,2),
        'tag_1' => $faker->numberBetween(7,12),
        'tag_2' => $faker->numberBetween(1,5),
        'tag_3' => $faker->numberBetween(1,5),
        'remember_token' => Str::random(10),
    ];
});
