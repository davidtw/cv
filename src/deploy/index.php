<?php
//$secret = '0mh=1bi41#!sbve_q_mg@6c+2rvz-=6g8@4o!yhsmu)czye1)+';
//$signature = hash_hmac('sha1', $policy, $secret_key, true);
if(true) {
    exec('./pull.sh', $output);
    echo $output[0];
}
