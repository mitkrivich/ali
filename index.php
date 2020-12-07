<?php
$authToken='Test-4247c-3fc638-4b18-a01ed-1264T';
$login='08022019@aliexpress-op.ru';
$gmdate=gmdate('dmYH', time());
$url='https://alix.brand.company/api_top3/';
//{хэш md5} — Хэш md5 строки {login}{время GMT}{alix_token}
$in=$login.$gmdate.$login;
$hash=md5($in);
echo "<P> In=".$in;
echo "<P> Hash=".$hash;
$authToken=$login.':'.$hash;
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => "Access-Token: {$authToken}\r\n".
                    "Content-Type: multipart/form-data\r\n".
                    "Accept: application/json;charset=UTF-8\r\n",
        'content' => 'content',


    )
));
$response = trim(file_get_contents($url, false, $context));
echo "Ответ:<BR>".$response;

