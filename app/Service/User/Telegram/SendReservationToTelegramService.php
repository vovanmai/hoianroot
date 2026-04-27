<?php

namespace App\Service\User\Telegram;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendReservationToTelegramService
{
    public $data;

    /**
     * Create a new service instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Send reservation to Telegram
     */
    public function handle(): void
    {
        $botToken = config('app.telegram_bot_token');
        $chatId   = config('app.telegram_chat_id');

        $data = $this->data;

        $phone = ($data['country_code'] ?? '') . ' ' . ($data['phone'] ?? '');
        $dateTime = ($data['date'] ?? '') . ' ' . ($data['time'] ?? '');

        $finalMessage = <<<EOT
            📌📌📌 *YOU HAVE A NEW RESERVATION* 📌📌📌

            👤 Fullname: {$data['full_name']}
            📞 Phone Number: {$phone}
            📅 Date Time: {$dateTime}
            📧 Email: {$data['email']}

            👥 Number of Guests: {$data['number_of_guests']}
            📝 Note: {$data['note']}

            🙏 Thank you!
            EOT;

        $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $finalMessage,
        ]);

        Log::info("Token: {$botToken}, Chat ID: {$chatId}, Message: {$finalMessage}");

        if (!$response->successful()) {
            Log::error('Telegram send failed', [
                'response' => $response->body(),
                'data' => $data,
            ]);

            throw new \Exception('Failed to send reservation to Telegram');
        }
    }
}
