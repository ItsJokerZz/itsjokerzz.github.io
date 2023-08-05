<?php
$type = $_GET['type'];
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$version = $_GET['version'];
$webhookurl = "https://discordapp.com/api/webhooks/745305994237706321/ZYBas8vQGImeOzatfMw97j4x5AMnNvT5mi27FBvoAH1D8VpRm4pJkZa5hz1_UroCi2nW";
$timestamp = date("c", strtotime("now"));

$json_data = json_encode(["embeds" => [ [ "title" => "$name ($email)", "type" => "rich", "description" => "$message", "timestamp" => $timestamp, "color" => hexdec( "3366ff" ), "footer" => [ "text" => "Version: $version", ], "author" => [ "name" => "$type Message", ] ] ] ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
curl_close( $ch );
?>