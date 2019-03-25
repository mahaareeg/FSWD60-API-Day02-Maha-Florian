<?php

require_once 'RESTful.php';
$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
$num = rand(0,20);

echo '<a href="'.$xml->channel->item[$num]->link.'" target="_blank">'.$xml->channel->item[$num]->title.'</a><br>';



$url2="http://api.serri.codefactory.live/random/";
$req = curl_get($url2);
$result = json_decode($req);
echo $result->joke;


?>