<?php


namespace App\Http\Controllers;


use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Service;

class HomeController extends Controller
{

    public function index()
    {
        $sliderPhotos = Photo::whereIn('title', [
            'slider1',
            'slider2',
            'slider3',
            'slider4',
            'slider5',
        ])->get();

        $photos = Photo::where('widget',true)->get();

        $posts = Post::query()->limit(3)->get();

        $services = Service::query()->get()->all();

        $sliderItems = [];
        foreach ($sliderPhotos as $key => $sliderPhoto) {
            $sliderItems[] = [
                'title' => '',
                'name' => 'Чуганова Тетяна',
                'description' => 'Весільний і сімейний фотограф',
                'photo' => $sliderPhoto,
                'buttonLink' => route('contact'),
                'buttonName' => 'Зв\'язатись',
            ];
        }

        return view('template.home', [
            'sliderItems' => $sliderItems,
            'widgetPosts' => $posts,
            'photos' => $photos,
            'services' => $services,
            'title' => 'Chugunova site',
        ]);
    }

}
