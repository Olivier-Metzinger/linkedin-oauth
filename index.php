<?php
require_once 'config_auth.php';
 
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    echo "<pre>"; print_r ($userProfile); echo "</pre>";
}
catch( Exception $e ){
    echo $e->getMessage() ;
}
