<?php
	//by panda
	session_start();
require_once("../common/DB_Connection.php");
require_once("../common/functions.php");
require_once("../common/dataLog.php");
	 

    $result = "success";
    $error = "";
    $data = array();

    $strGuideIds = $_POST['strGuideIds'];
    $sql = " delete from ua_bucket_location where ua_bucket_location in ($strGuideIds) and ua_bucket_type='G'";
    $db->query($sql);
    
    $data['result'] = $result;
    $data['error'] = $error;
    header('Content-Type: application/json');
    echo json_encode($data);    
?>
