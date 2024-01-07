<?php

$username = isset($_POST['username'] ) ? $_POST['username'] : '';
$e = true;
$message = array();
if (!isset($username) || empty($username)) {
    $e = false;
    $message = "Username can't be empty!";

}
if ($e) {
    if ($username === 'abc') {
        $e = true;
        $message ="Verified";

    }else{
        $e = false;
        $message = "Error";

    }
}
 
echo json_encode(
    array(
        'ok' => $e,
        'messages' => $message
    )
    );