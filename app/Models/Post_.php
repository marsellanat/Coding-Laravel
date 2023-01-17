<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marsella",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Illo nostrum earum asperiores in natus velit neque aut dolores 
            accusamus eveniet ea molestiae tempora, error perferendis deleniti nihil vitae illum facere!"
        ],
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-kedua",
            "author" => "Regina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Illo nostrum earum asperiores in natus velit neque aut dolores 
            accusamus eveniet ea molestiae tempora, error perferendis deleniti nihil vitae illum facere!"
        ],
    ];

    public static function all()
    {
        return self:: $blog_post;
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
