<?php
$authToken='Test-4247c-3fc638-4b18-a01ed-1264T';

$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => "Access-Token: {$authToken}\r\n".
            "Content-Type: application/json\r\n",
        'content' => json_encode($postData)
    )
));
