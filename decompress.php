<?php
$data = file_get_contents('php://input');
// $data = zlib_decode($data);
// $data = json_decode($data);

var_dump($data);
exit;