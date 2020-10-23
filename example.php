<?php

require_once "DiscordWrapper.php";

// Your generated webhook
$webhook = "765528404036419614/6lhV6OVE11w0Hj-3pB1m3aXQ9GD4B_CJH5f82SsMQENNp6ftqzeWV_AlsfOBvsggkUhf";

$discordWrapper = new DiscordWrapper($webhook);
$discordWrapper->sendToDiscord(
    [
        'username' => 'DiscordPHP',
        'content' => 'My content'
    ]
);