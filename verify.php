<?php
$access_token = 'ihHHnyAff3upYvAeT9FfsyPQdhOgZmpyOMutNAMGRS3+WqHMwIs8luGWEUsscISQ5OAaZMmCv2Q7mjB46QJAS3RPRc8V5Ukv3kiKOBS9ZE/OOYdQ9J0Ik6peeIdS0PNOqVDgHOp5JFLHWIkXqEDKMAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
