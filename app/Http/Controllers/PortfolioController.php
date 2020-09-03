<?php


namespace App\Http\Controllers;


use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Tag;

class PortfolioController extends Controller
{

    public function index()
    {
        $tags = Tag::query()->get()->all();

        /** @var Tag $tag */
        foreach ($tags as $tag) {
            $photos = $tag->photos;

            foreach ($photos as $photo) {
                $photo->cover->thumbnail(null, 415);
            }
        }

        return view('template.portfolio', [
            'tags' => $tags,
            'pageTitle' => 'Portfolio',
        ]);
    }

}