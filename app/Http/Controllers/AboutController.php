<?php


namespace App\Http\Controllers;


use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Tag;

class AboutController extends Controller
{

    public function index()
    {
        return view('template.about', [
            'pageTitle' => 'Про мене',
        ]);
    }

}
