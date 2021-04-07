<?php
require_once 'vendor/autoload.php';
 
$config = [
    'callback' => 'http://localhost/linkedinauth/index.php',
    'keys'     => [
                    'id' => '86z2wmfuum0pmt',
                    'secret' => 'WQRFTl5s6y0Hba7D'
                ],
    'scope'    => 'r_liteprofile r_emailaddress',
];
 
$adapter = new Hybridauth\Provider\LinkedIn( $config );