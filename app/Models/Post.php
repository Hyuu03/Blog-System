<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Wahyu Purnama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam qui neque nobis
            asperiores doloribus impedit adipisci a voluptates, officiis maxime porro laboriosam ducimus recusandae fugiat facere sunt dolor,
            repudiandae expedita!'
        ],

        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Wahyu Purnama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam reiciendis quisquam
            asperiores eveniet excepturi enim consectetur quos earum sequi ipsam deleniti officiis dolore nobis eos,
            possimus autem maiores ullam laboriosam.'
        ],
        
        ];
    }

    public static function find($slug) {
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}