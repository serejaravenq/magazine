<?php
$url = "http://www.google.com.ru/search?hl=ru&ie=UTF-8&oe=UTF-8&q=софттайм&lr=";
   echo("исходная строка: $url");echo("<br>");
   echo("закодировали:");echo("<br>");
   $url_code = rawurlencode($url);
   echo($url_code);echo("<br>");
   echo("и раскодировали:");echo("<br>");
   $url_decode = rawurldecode($url_code);
   echo($url_decode);
   ?>