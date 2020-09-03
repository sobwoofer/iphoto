<?php


namespace App\Http\Controllers;


use App\Eloquent\Photo;
use App\Eloquent\Post;
use App\Eloquent\Tag;

class ContactController extends Controller
{

    public function index()
    {
        return view('template.contact', [
            'pageTitle' => 'Contact',
        ]);
    }

}
