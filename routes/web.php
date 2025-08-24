<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
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

    return view('posts',['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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
    
    $post = Arr::first($posts, function($post) use($slug){
        return $post['slug'] == $slug;
    });

    if(!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
