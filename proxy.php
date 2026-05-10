<?php
// proxy.php
$url = 'http://jiqie.zhenbi.com/make.php?file=a44j&page=1014';
$data = $_POST; // 接收前端传来的参数
$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    ]
];
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo $result;
?>