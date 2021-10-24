<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,

    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Setting::class, static function (Faker\Generator $faker) {
    return [
        'key' => $faker->sentence,
        'group' => $faker->sentence,
        'value' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,


    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Window::class, static function (Faker\Generator $faker) {
    return [
        'icon' => $faker->sentence,
        'name' => $faker->firstName,
        'order' => $faker->randomNumber(5),
        'operations' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,


    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Form::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'is_table' => $faker->boolean(),
        'table' => $faker->sentence,
        'inputs' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,


    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Customer::class, static function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->sentence,
        'email' => $faker->email,
        'address' => $faker->text(),
        'county_id' => $faker->sentence,
        'gov_id' => $faker->sentence,
        'city_id' => $faker->sentence,
        'info' => $faker->text(),
        'password' => bcrypt($faker->password),
        'login' => $faker->boolean(),
        'remember_token' => null,
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,


    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Categore::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'slug' => $faker->unique()->slug,
        'is_published' => $faker->boolean(),
        'seo_description' => $faker->sentence,
        'seo_keywords' => $faker->sentence,
        'seo_title' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,


    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Classes::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,


    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Contact::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'phone' => $faker->sentence,
        'message' => $faker->text(),
        'section' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Course::class, static function (Faker\Generator $faker) {
    return [
        'teacher_id' => $faker->sentence,
        'name' => $faker->firstName,
        'slug' => $faker->unique()->slug,
        'description' => $faker->text(),
        'price' => $faker->randomFloat,
        'discount' => $faker->randomFloat,
        'image' => $faker->sentence,
        'material_id' => $faker->sentence,
        'times' => $faker->text(),
        'live' => $faker->text(),
        'activated' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Faq::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'answer' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Homework::class, static function (Faker\Generator $faker) {
    return [
        'course_id' => $faker->sentence,
        'teacher_id' => $faker->sentence,
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'homework' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\HomeworksSolf::class, static function (Faker\Generator $faker) {
    return [
        'test_id' => $faker->sentence,
        'user_id' => $faker->sentence,
        'solve' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Material::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Menu::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'description' => $faker->text(),
        'area' => $faker->sentence,
        'items' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Order::class, static function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->sentence,
        'name' => $faker->firstName,
        'uuid' => $faker->text(),
        'phone' => $faker->sentence,
        'total' => $faker->randomFloat,
        'refund' => $faker->randomFloat,
        'payment' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Page::class, static function (Faker\Generator $faker) {
    return [
        'author_id' => $faker->sentence,
        'title' => $faker->sentence,
        'image' => $faker->text(),
        'slug' => $faker->unique()->slug,
        'body' => $faker->text(),
        'is_published' => $faker->boolean(),
        'seo_description' => $faker->sentence,
        'seo_keywords' => $faker->sentence,
        'seo_title' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Payment::class, static function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->sentence,
        'order_id' => $faker->sentence,
        'teacher_id' => $faker->sentence,
        'name' => $faker->firstName,
        'phone' => $faker->sentence,
        'total' => $faker->randomFloat,
        'discount' => $faker->randomFloat,
        'payment' => $faker->sentence,
        'provider' => $faker->sentence,
        'provider_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Photo::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'image' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        'author_id' => $faker->sentence,
        'category_id' => $faker->sentence,
        'tag_id' => $faker->sentence,
        'title' => $faker->sentence,
        'likes' => $faker->randomFloat,
        'image' => $faker->text(),
        'slug' => $faker->unique()->slug,
        'body' => $faker->text(),
        'is_published' => $faker->boolean(),
        'seo_description' => $faker->sentence,
        'seo_keywords' => $faker->sentence,
        'seo_title' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Review::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'job' => $faker->sentence,
        'review' => $faker->sentence,
        'image' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Social::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'url' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Tag::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Teacher::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'phone' => $faker->sentence,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'enabled' => $faker->boolean(),
        'image' => $faker->text(),
        'email_verified_at' => $faker->dateTime,
        'material_id' => $faker->sentence,
        'remember_token' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Test::class, static function (Faker\Generator $faker) {
    return [
        'course_id' => $faker->sentence,
        'teacher_id' => $faker->sentence,
        'name' => $faker->firstName,
        'description' => $faker->sentence,
        'test' => $faker->text(),
        'grade' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\TestsSolf::class, static function (Faker\Generator $faker) {
    return [
        'test_id' => $faker->sentence,
        'user_id' => $faker->sentence,
        'solve' => $faker->text(),
        'grade' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'email_verified_at' => $faker->dateTime,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'phone' => $faker->sentence,
        'other_phone' => $faker->sentence,
        'image' => $faker->text(),
        'type' => $faker->sentence,
        'class_id' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Comment::class, static function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->sentence,
        'post_id' => $faker->sentence,
        'body' => $faker->text(),
        'is_published' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
