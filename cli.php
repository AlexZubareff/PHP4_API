<?php


use App\Article\Article;
use App\Comment\Comment;
use App\User\User;

// Подключение автозагрузчика
require "vendor/autoload.php";

$faker = Faker\Factory::create(); // Создаем обект faker

if ($argv[1] == "user") {
    $newUser = new User($faker->randomDigitNotZero(10),$faker->firstName, $faker->lastName);
    echo $newUser;
} elseif ($argv[1] == "post"){
    $newPost = new Article($faker->randomDigitNotZero(10),$faker->randomDigitNotZero(10), $faker->title(25), $faker->text(50));
    echo $newPost;
} elseif ($argv[1] == "comment"){
    $newComment = new Comment($faker->randomDigitNotZero(10),$faker->randomDigitNotZero(10), $faker->randomDigitNotZero(10), $faker->text(25));
    echo $newComment;
} else {
    echo "Wrong argument key in argv";
}