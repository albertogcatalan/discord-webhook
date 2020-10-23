<?php

require_once "DiscordWrapper.php";

// Your generated webhook
$webhook = "765528404036419614/6lhV6OVE11w0Hj-3pB1m3aXQ9GD4B_CJH5f82SsMQENNp6ftqzeWV_AlsfOBvsggkUhf";

$discordWrapper = new DiscordWrapper($webhook);
$discordWrapper->sendToDiscord(
    [
        'username' => 'DiscordPHP',
        'avatar_url' => 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2019/05/peliculas-avatar-retrasan-nuevo-plan-disney.jpg',
        'content' => 'My content'
    ]
);

// See more options in https://discord.com/developers/docs/resources/webhook#execute-webhook