<?php
// session_start();
include('../../../include/config.php');
include('../include/config.php');

// $STAFFID="FESTUS"; 

$STAFFID=implode(',', array_map(function($el){ return $el['idno']; }, get_user($_SESSION['loginid'])));

extract($_POST);


if($dataname=='getclassall'){
     $setup->getallclassmessage($classall);
}

if($dataname=='premessage'){
    $setup->preclassmessage($allChecked,$message,$classall);

}

if($dataname=='sendmessage'){
    
    $combine = array_combine( $allCheckedPhone, $allCheckedMessage );
    
    foreach ($combine as $to => $smstosend){
        // print_r($to);
        $setup->sendbulksms($to, $smstosend, $STAFFID);
    }

}

?>