<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Anhar",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo exercitationem officiis neque, natus architecto dolores tenetur enim sit officia eos delectus fugit amet eaque dolor labore rerum fugiat deleniti optio magnam. Alias cum culpa sint quia eum accusantium iste excepturi fugiat deserunt. Rerum sit sunt aspernatur dicta veniam error nam facere fugiat iusto magnam deserunt amet delectus fuga minus, quo laudantium? Assumenda voluptatem sunt repudiandae accusantium, delectus deserunt consectetur odio provident soluta! Eaque distinctio voluptas eligendi illum quo perferendis nisi debitis aut voluptates dicta? Sequi modi laboriosam esse voluptatum quasi autem iure minima tempore, atque ipsa quaerat accusamus repudiandae veniam.",
        ],
        [
            "tittle" => "Judul post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Indah Permata",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo exercitationem officiis neque, natus architecto dolores tenetur enim sit officia eos delectus fugit amet eaque dolor labore rerum fugiat deleniti optio magnam. Alias cum culpa sint quia eum accusantium iste excepturi fugiat deserunt. Rerum sit sunt aspernatur dicta veniam error nam facere fugiat iusto magnam deserunt amet delectus fuga minus, quo laudantium?",
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts -> firstWhere('slug',$slug);
    } 
}