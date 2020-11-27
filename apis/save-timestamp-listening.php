<?php

require_once __DIR__.'/../db-connect.php';

ini_set('display_errors', 0);

if(isset($_POST['timestamp']))
{
    $timestamp = time();
    date_default_timezone_set("Europe/Copenhagen");
    $dateTime = date('d/m/Y h:i:s', $timestamp);
    //echo $dateTime;
}

try {
    global $dateTime;
    //Saving the timestamp
    $stmt = $db->prepare( 'INSERT INTO overview VALUES(null,:dateTime)' );
    $stmt->bindValue(':dateTime', $dateTime );
    $stmt->execute();

    //Using rowcount() when INSERTing, UPDATEing or DELETEing
    if( $stmt->rowCount() == 0 ){
        echo 'Sorry, the account was not saved!';
        exit;
    }

}catch( PDOEXception $ex ){
    echo $ex;
}

header("refresh:0;url=../write-essay.php");
sendResponse(1, __LINE__, "Saved!");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function sendResponse($bStatus, $iLineNumber, $sMessage){
    echo '{"status":'.$bStatus.', "code":'.$iLineNumber.', "message":'.$sMessage.'}';
    exit;
}