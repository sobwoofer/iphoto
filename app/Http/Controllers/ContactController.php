<?php


namespace App\Http\Controllers;


use App\Eloquent\Order;
use App\Eloquent\Service;
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
            $message = $request->name;
            $message = $request->email;
            $message = $request->phone;
            $message = $request->message;

            return back()->with('success', 'Дякую, за звернення. Я зв\'яжусь з вами найближчим часом.');

        } catch (Exception $e) {
            return back()->with('error', 'Не вдалося створити звернення. Зв\'яжіться будь ласка зі мною по телефону.');

        }
    }

}
