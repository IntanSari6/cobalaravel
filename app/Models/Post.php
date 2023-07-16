<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = 
        [
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
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
