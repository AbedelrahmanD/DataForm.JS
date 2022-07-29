<?php
//access form data from $_POST, $_GET or $_REQUEST
$response["message"]="success ".$_REQUEST["name"];
// $response["redirect"]="login.php";
echo json_encode($response);