<?php 
require __DIR__ . '/vendor/autoload.php';

$app_id = 'YOUR_APP_ID';
$app_key = 'YOUR_APP_KEY';
$app_secret = 'YOUR_APP_SECRET';

$pusher = new Pusher( $app_key, $app_secret, $app_id );
echo $pusher->socket_auth('private-rpi', '74053.4303202');

