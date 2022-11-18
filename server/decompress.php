<?php
$data = file_get_contents('php://input');

//!!! uncomment this to perform decoding !!!!
// $data = json_decode(zlib_decode($data));

var_dump($data);
exit;
