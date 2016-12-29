<?php
$secret = '0mh=1bi41#!sbve_q_mg@6c+2rvz-=6g8@4o!yhsmu)czye1)+';
$post = file_get_contents('php://input');
list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + array('', '');
$signature = hash_hmac($algo, $post, $secret);

if($signature === $hash) {
    exec('./pull.sh', $output);
    echo "\n" . $output[0];
}
