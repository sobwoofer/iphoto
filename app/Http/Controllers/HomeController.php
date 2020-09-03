<?php


namespace App\Http\Controllers;


use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Service;
use App\Eloquent\Tag;

class HomeController extends Controller
{

    public function index()
    {
        $sliderPhotos = Photo::whereIn('id', [6,9,12])->get();

        /** @var Photo $sliderPhoto */
        foreach ($sliderPhotos as $sliderPhoto) {
            $img = $sliderPhoto->cover->thumbnail(1600);
        }

        $tags = Tag::whereIn('id', [1,2,3])->get();

        /** @var Tag $tag */
        foreach ($tags as $tag) {
            $photos = $tag->photos;
        }

        $posts = Post::whereIn('id', [1,2,3])->get();
        /** @var Post $post */
        foreach ($posts as $post) {
            $img = $post->cover->thumbnail(1600);
        }

        $services = Service::query()->get()->all();

        return view('template.home', [
            'sliderPhotos' => $sliderPhotos,
            'tags' => $tags,
            'widgetPosts' => $posts,
            'services' => $services,
            'title' => 'Chugunova site',
        ]);
    }

}
