<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [ "title" => "About", "name" => "Intan", "Email" => "intan@gmail.com", "image" => "rh.jfif"]);
});



Route::get('/blog', function () {
    $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Intan Sari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia quis aut perspiciatis facere nostrum modi eveniet dolores odio amet possimus iusto, in atque quos, ducimus sint obcaecati. Reiciendis, velit aperiam neque libero deserunt quam qui iusto distinctio cum, ab pariatur optio reprehenderit, amet provident id? Fuga esse, quidem voluptatem, tenetur rerum neque eaque eveniet quos ullam quia aliquid necessitatibus cumque commodi reprehenderit dignissimos quisquam quae dolores, hic vel molestiae molestias consectetur accusamus totam ipsum! Labore odio odit magnam voluptas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Florence",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia quis aut perspiciatis facere nostrum modi eveniet dolores odio amet possimus iusto, in atque quos, ducimus sint obcaecati. Reiciendis, velit aperiam neque libero deserunt quam qui iusto distinctio cum, ab pariatur optio reprehenderit, amet provident id? Fuga esse, quidem voluptatem, tenetur rerum neque eaque eveniet quos ullam quia aliquid necessitatibus cumque commodi reprehenderit dignissimos quisquam quae dolores, hic vel molestiae molestias consectetur accusamus totam ipsum! Labore odio odit magnam voluptas."
        ],
    ];
    return view('posts', ["title" => "posts",
     "posts" => $blog_posts]);

});


 //Halaman Single slug

Route::get('posts/{slug}', function($slug){
    $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Intan Sari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia quis aut perspiciatis facere nostrum modi eveniet dolores odio amet possimus iusto, in atque quos, ducimus sint obcaecati. Reiciendis, velit aperiam neque libero deserunt quam qui iusto distinctio cum, ab pariatur optio reprehenderit, amet provident id? Fuga esse, quidem voluptatem, tenetur rerum neque eaque eveniet quos ullam quia aliquid necessitatibus cumque commodi reprehenderit dignissimos quisquam quae dolores, hic vel molestiae molestias consectetur accusamus totam ipsum! Labore odio odit magnam voluptas."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Florence",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia quis aut perspiciatis facere nostrum modi eveniet dolores odio amet possimus iusto, in atque quos, ducimus sint obcaecati. Reiciendis, velit aperiam neque libero deserunt quam qui iusto distinctio cum, ab pariatur optio reprehenderit, amet provident id? Fuga esse, quidem voluptatem, tenetur rerum neque eaque eveniet quos ullam quia aliquid necessitatibus cumque commodi reprehenderit dignissimos quisquam quae dolores, hic vel molestiae molestias consectetur accusamus totam ipsum! Labore odio odit magnam voluptas."
        ],
    ];


$new_post = [];
foreach($blog_posts as $post){
    if($post["slug"] === $slug){
        $new_post = $post;
    }
}

    return view('post', ["title" => "Single Post", "post" => $new_post]);
});