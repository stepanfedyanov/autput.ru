<?php

function message_to_telegram($text)
{
    if (!(env('TELEGRAM_TOKEN') OR env('TELEGRAM_CHATID'))) return;
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . env('TELEGRAM_TOKEN') . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => env('TELEGRAM_CHATID'),
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);
}