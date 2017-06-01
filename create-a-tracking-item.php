<?php

include("track.class.php");
$track = new Trackingmore;
$extraInfo['title']          = 'iphone6';
$extraInfo['customer_name']  = 'charse chen';
$extraInfo['customer_email'] = 'chasechen@gmail.com';
$extraInfo['order_id']       = '8988787987';
$extraInfo['lang']           = 'en';
 
$track = $track->createTracking('hong-kong-post','RT914768937HK',$extraInfo);
?>