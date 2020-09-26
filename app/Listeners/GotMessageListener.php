<?php

namespace App\Listeners;

use App\Eloquent\Customer;
use App\Events\GotMessage;
use App\Services\FlowService;
use Telegram\Bot\Api;

/**
 * Class CreatedOrderListener
 * @package App\Listeners
 * @property Api $telegram
 * @property FlowService $flowService
 */
class GotMessageListener
{
    private $telegram;
    private $flowService;

    public function __construct(Api $telegram, FlowService $flowService)
    {
        $this->telegram = $telegram;
        $this->flowService = $flowService;
    }

    /**
     * @param GotMessage $event
     * @throws \Telegram\Bot\Exceptions\TelegramSDKException
     */
    public function handle(GotMessage $event)
    {
        $this->flowService->checkUpdates(); //create customers if not exist

        $customers = Customer::all();
        $message = 'Повідомлення з сайту: ' . PHP_EOL;
        $message .= 'Ім\'я: ' . $event->name. PHP_EOL;
        $message .= 'Телефон: ' . $event->phone. PHP_EOL;
        $message .= 'Email: ' . $event->email. PHP_EOL;
        $message .= 'Повідомлення: ' . $event->message;

        //send message for all bot customers
        foreach ($customers as $customer) {
            $this->telegram->sendMessage([
                'chat_id' => $customer->chat_id,
                'text' => $message,
            ]);
        }
    }
}
