<?php

//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    filearchive.php

    MediaWiki API Demos
    Demo of `Filearchive` module: Enumerate 3 deleted files from filearchive table in descending order.

    MIT License
*/

$endPoint = "https://en.wikipedia.org/w/api.php";
$params = [
    "action" => "query",
    "falimit" => "3",
    "list" => "filearchive",
    "fadir" => "descending",
    "format" => "json"
];

$url = $endPoint . "?" . http_build_query( $params );

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

$result = json_decode( $output, true );
var_dump( $result );
