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

        $photos = Photo::where('widget',true)->get();

        $posts = Post::query()->limit(3)->get();

        $services = Service::query()->get()->all();

        $sliderItems = [
            [
                'title' => 'Привіт, мене звати',
                'name' => 'Чуганова Тетяна',
                'description' => 'Я професійний фотограф',
                'photo' => $sliderPhotos[0],
                'buttonLink' => route('contact'),
                'buttonName' => 'Зв\'язатись',
            ],
            [
                'title' => 'Slide2',
                'name' => 'Slide2 name',
                'description' => 'Slide2 description',
                'photo' => $sliderPhotos[1],
            ],
            [
                'title' => 'Slide3',
                'name' => 'Slide3 name',
                'description' => 'Slide3 description',
                'photo' => $sliderPhotos[2],
            ]
        ];

        return view('template.home', [
            'sliderItems' => $sliderItems,
            'widgetPosts' => $posts,
            'photos' => $photos,
            'services' => $services,
            'title' => 'Chugunova site',
        ]);
    }

}
