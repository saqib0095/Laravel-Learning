<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title,$excerpt,$date,$body,$slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }
        return $post = cache()->remember("posts.{$slug}", 1200, fn () => file_get_contents($path));
    }

    public static function all(){
        return cache()->rememberForever('posts.all',function(){
            return collect(File::files(resource_path("posts/")))
            ->map(function ($file){
                return YamlFrontMatter::parseFile($file);
            })
            ->map(function($document){
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug

                );
            })
            ->sortByDesc('date');  
        });
        
    }
}
