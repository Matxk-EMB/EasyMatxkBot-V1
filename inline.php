<?php

echo "<br>Plugin Inline: 1.0";

if($update["inline_query"])
{
$inline = $update["inline_query"]["id"];
$msg = $update["inline_query"]["query"];
$userID = $update["inline_query"]["from"]["id"];
$username = $update["inline_query"]["from"]["username"];
$name = $update["inline_query"]["from"]["first_name"];




$json = array(
//prima riga risultati
array(
'type' => 'article',
'id' => '0',
'title' => 'Titolo',
'description' => "Descrizione",
'message_text' => "Questo appare: testo",
'parse_mode' => 'Markdown'
),

);




$json = json_encode($json);
$args = array(
'inline_query_id' => $inline,
'results' => $json,
'cache_time' => 5
);
$r = new HttpRequest("post", "https://api.telegram.org/$api/answerInlineQuery", $args);

}



