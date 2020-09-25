<?php


namespace App\Http\Controllers;


use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Tag;
use Request;

class BlogController extends Controller
{

    public function index($tag = null)
    {
        $allTags = Tag::query()->leftJoin('post_tag', 'id', '=', 'tag_id')->get()->all();

        if ($tag) {
            $posts = Post::query()
                ->leftJoin('post_tag', 'post.id', 'post_tag.post_id')
                ->leftJoin('tag', 'tag.id', 'post_tag.tag_id')
                ->where('tag.tag', $tag)
                ->get()
                ->all();
        } else {
            $posts = Post::query()->get()->all();
        }

        return view('template.blog', [
            'pageTitle' => 'Blog',
            'posts' => $posts,
            'allTags' => $allTags,
            'currentTag' => $tag
        ]);
    }

    public function single(int $id)
    {
        $post = Post::query()->where('id', $id)->firstOrFail();
        $allTags = Tag::query()->leftJoin('post_tag', 'id', '=', 'tag_id')->get()->all();

        return view('template.single-blog', [
            'post' => $post,
            'allTags' => $allTags,
        ]);
    }

}
