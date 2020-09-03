<?php


namespace App\Http\Controllers;


use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Tag;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Post::query()->get()->all();

        /** @var Post $post */
        foreach ($posts as $post) {
            $img = $post->cover->thumbnail(1600);
        }

        return view('template.blog', [
            'pageTitle' => 'Blog',
            'posts' => $posts
        ]);
    }

    public function single(int $id)
    {
        $post = Post::query()->where('id', $id)->firstOrFail();

        return view('template.single-blog', [
            'post' => $post
        ]);
    }

}
