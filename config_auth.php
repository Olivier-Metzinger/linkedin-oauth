<?php
require_once 'vendor/autoload.php';
 
$config = [
    'callback' => 'http://localhost/linkedinauth/index.php',
    'keys'     => [
                    'id' => '//id',
                    'secret' => '//secret'
                ],
    'scope'    => 'r_liteprofile r_emailaddress',
];
 
$adapter = new Hybridauth\Provider\LinkedIn( $config );
