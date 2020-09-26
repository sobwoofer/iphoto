<?php

namespace App\Http\Controllers;

use App\Events\GotMessage;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('template.contact', [
            'pageTitle' => 'Contact',
        ]);
    }

    public function send(Request $request)
    {
        try {
            event(new GotMessage($request->name, $request->phone, $request->email, $request->message));

            return back()->with('success', 'Дякую, за звернення. Я зв\'яжусь з вами найближчим часом.');
        } catch (Exception $e) {
            return back()->with('error', 'Не вдалося створити звернення. Зв\'яжіться будь ласка зі мною по телефону.');
        }
    }

}
