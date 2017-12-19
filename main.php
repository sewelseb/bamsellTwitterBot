<?php

require_once ('codebird-php-develop/src/codebird.php');

\Codebird\Codebird::setConsumerKey('5RixWpFR5XjhR5qZaUPAP3TWH', '5kt8SvcDwA7fmZRjHd5CtWV3tnOUm75HS62D9MMlO8pw8KHmg3');
$cb = \Codebird\Codebird::getInstance();
$cb->setToken('732606536518934528-NcL3QkB2oPaRo11ECnDfRPHwGn2Dtiq', 'ct5wL3VWDNnYiwjX91rDJEa3TetGCSxxVCAJJQfR7X0xZ');

$reply = (array) $cb->
