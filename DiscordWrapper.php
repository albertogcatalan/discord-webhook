<?php

class DiscordWrapper
{
    protected $discord;
    protected $webhook;

    public function __construct($webhook)
    {
        $this->webhook = $webhook;
    }

    public function sendToDiscord($params)
    {
        $webhook = $this->webhook;

        if (!$webhook) {
            return false;
        }

        $url = 'https://discordapp.com/api/webhooks/'.$webhook;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }

}