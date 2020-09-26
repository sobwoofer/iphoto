<?php

namespace App\Listeners;

use App\Eloquent\Customer;
use App\Events\CreatedOrder;
use App\Services\FlowService;
use Telegram\Bot\Api;

/**
 * Class CreatedOrderListener
 * @package App\Listeners
 * @property Api $telegram
 * @property FlowService $flowService
 */
class CreatedOrderListener
{
    private $telegram;
    private $flowService;

    public function __construct(Api $telegram, FlowService $flowService)
    {
        $this->telegram = $telegram;
        $this->flowService = $flowService;
    }

    /**
     * @param CreatedOrder $event
     * @throws \Telegram\Bot\Exceptions\TelegramSDKException
     */
    public function handle(CreatedOrder $event)
    {
        $this->flowService->checkUpdates(); //create customers if not exist

        $customers = Customer::all();
        $message = 'Вітаю, Нове замовення з сайту сервіс: ' . $event->order->service_name . PHP_EOL;
        $message .= 'Ім\'я: ' . $event->order->first_name. PHP_EOL;
        $message .= 'Телефон: ' . $event->order->phone. PHP_EOL;
        $message .= 'Email: ' . $event->order->phone. PHP_EOL;
        $message .= 'Мінімальна ціна з сервісу: ' . $event->order->price. PHP_EOL;
        $message .= 'Повідомлення: ' . $event->order->message;

        //send message for all bot customers
        foreach ($customers as $customer) {
            $this->telegram->sendMessage([
                'chat_id' => $customer->chat_id,
                'text' => $message,
            ]);
        }
    }
}
