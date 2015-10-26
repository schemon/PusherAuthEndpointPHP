<?php 
require __DIR__ . '/vendor/autoload.php';



$app_id = '134441';
$app_key = '599cb5ed77cd5efb659a';
$app_secret = '76a57ea82e311bcbbb1f';

error_log('post ' . var_export($_SERVER, true));

$channel_name = $_POST['channel_name'];
$socket_id = $_POST['socket_id'];

error_log($app_id);
error_log($app_key);
error_log($app_secret);
error_log('channel name: ' . $channel_name);
error_log('socket id: ' . $socket_id);


$pusher = new Pusher( $app_key, $app_secret, $app_id );
echo $pusher->socket_auth($channel_name, $socket_id);
