<?php
if(!SESSION_ID()){
SESSION_START();
}
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
$appid = '273454983532035';
$apppass = '8bc68f23c04f86ebf0484a119e1f3e06';
$fb = new \Facebook\Facebook([
  'app_id' => $appid,
  'app_secret' => $apppass,
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);

?>
