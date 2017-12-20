<?php

require_once ('codebird-php-develop/src/codebird.php');

\Codebird\Codebird::setConsumerKey('5RixWpFR5XjhR5qZaUPAP3TWH', '5kt8SvcDwA7fmZRjHd5CtWV3tnOUm75HS62D9MMlO8pw8KHmg3');
$cb = \Codebird\Codebird::getInstance();
$cb->setToken('732606536518934528-NcL3QkB2oPaRo11ECnDfRPHwGn2Dtiq', 'ct5wL3VWDNnYiwjX91rDJEa3TetGCSxxVCAJJQfR7X0xZ');

$q = 'sell';
$count = 3;
//$api = $_POST['api'];

$params = array(
    'screen_name' => $q,
    'q' => $q,
    'count' => $count
);



$response = (array) $cb->search_tweets($params);
$tweets = $response['statuses'];


file_put_contents('test.json', json_encode($tweets));

//Output result in JSON, getting it ready for jQuery to process
var_dump($tweets[0]);

foreach ($tweets as $tweet)
{
    var_dump($tweets["entities"]);
}