<?php
/**
 * Array Filtering
 * User: daviddiomede
 * Date: 1/20/18
 * Time: 7:43 PM
 */

class Post {
    public $title;
    public $published;

    public function __construct($title, $author, $published) {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'DD', true),
    new Post('My Second Post', 'ND', true),
    new Post('My Third Post', 'AD',  true),
    new Post('My Fourth Post', 'PD', false),
];

/*$unpublishedPosts = array_filter($posts, function($post){ =
   return ! $post->published; //returns unpublished posts
});*/

/*$publishedPosts = array_filter( $posts, function ( $post ) {
    return $post->published; //returns published posts
} );*/

/*// overrides $post output and instead displays foobar array because of $modified
$modified = array_map(function($post){
    return 'foobar';
}, $posts);*/

/*// returns posts that are Published
$modified = array_map(function($post){
    return $post->published = true;
}, $posts);*/

/*
$modified = array_map(function($post){
    return ['title' => $post->title]; //returns title as title
}, $posts);*/

/*
$modified = array_map(function($post){
    return new SomeOtherObject[$post->title]; //Map over collection and return a new instance of the collection
}, $posts);*/


/*$modified = array_map( function ( $post ) {
    return (array) $post; //returns collection of arrays
}, $posts );*/

/*$titles = array_map(function($post){
    return $post->title;
}, $posts);*/


//Using array column this way the property needs to be public
//$titles = array_column($posts, 'title'); //Using array column this way the property needs to be public


/*
 *
 * returns  list from the array with the The key equaling to the post:
 *


$posts = array_map( function ( $post ) {
    return (array) $post;
}, $posts );


var_dump( $posts );

$authors = array_column( $posts, 'author', 'title' ); //The key is equal to the post


var_dump( $authors );
 */




/*
 *
 * returns a clean list from the array:
 * (string) My First Post
 *    1: (string) My Second Post
 *   2: (string) My Third Post
 *   3: (string) My Fourth Post
 *
 * /
 *
 * $posts = array_map(function ($post){
    return (array) $post;
}, $posts);

$titles = array_column($posts, 'author'); //fetching the key

var_dump( $titles );
*/

// returns posts that are Published in foreach loop without using any special array function, but better to use array map
/*foreach ($posts as $post){
    $post->published = true;
}*/

var_dump( $posts );