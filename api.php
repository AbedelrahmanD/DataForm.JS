<?php
//access form data from $_POST, $_GET or $_REQUEST
$response["message"]="success ".$_REQUEST["name"];
// $response["redirect"]="login.php";

$response["reset"]=true;
echo json_encode($response);