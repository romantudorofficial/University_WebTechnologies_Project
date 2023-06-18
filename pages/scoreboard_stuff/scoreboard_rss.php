<?php
include "scoreboard_model.php";

$user_top = getFirst10Users();

$xmlDoc = new DOMDocument('1.0', 'UTF-8');
$xmlDoc->preserveWhiteSpace = false;
$xmlDoc->formatOutput = true;
$rss = $xmlDoc->createElement('rss');
$rss->setAttribute('version', '2.0');
$xmlDoc->appendChild($rss);

$channel = $xmlDoc->createElement('channel');
$rss->appendChild($channel);

$title = $xmlDoc->createElement('title', 'MaMa! Scoreboard');
$channel->appendChild($title);

foreach ($user_top as $user) {
    $item = $xmlDoc->createElement('item');

    $title = $xmlDoc->createElement('title', $user['firstName'] . ' ' . $user['lastName']);
    $item->appendChild($title);

    $score = $xmlDoc->createElement('score', $user['score']);
    $item->appendChild($score);

    $channel->appendChild($item);
}

header('Content-Type: application/rss+xml; charset=UTF-8');

echo $xmlDoc->saveXML();

?>
