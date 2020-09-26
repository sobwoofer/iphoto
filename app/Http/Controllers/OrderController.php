<?php


namespace App\Http\Controllers;

use App\Eloquent\Order;
use App\Eloquent\Service;
use App\Events\CreatedOrder;
use Illuminate\Http\Request;
use Exception;
use Telegram\Bot\Api;
use Log;

/**
 * Class OrderController
 * @package App\Http\Controllers
 * @property Api $telegram
 */
class OrderController extends Controller
{
    private $telegram;

    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    public function index(Request $request)
    {
        try {
            $service = Service::where('id', $request->service_id)->firstOrFail();
            $order = Order::create([
                'first_name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'service_name' => $service->title,
                'service_id' => $service->id,
                'price' => $service->price,
            ]);
            event(new CreatedOrder($order));

            return back()->with('success', 'Дякую, замовлення успішно створено. Я зв\'яжусь з вами найближчим часом.');

        } catch (Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Не вдалося створити замовлення. Зв\'яжіться будь ласка зі мною по телефону.');
        }
    }

}
