<?php

$password = $_POST['password'];
$username = $_POST['username'];


$results = mysql_query("select * from tbl_logginsand_passwords WHERE username = '".$_POST['username'].'" AND password = '".$_POST['password']."'");


if (!$results) {
    echo "that is not the password";
} else {

}

?>
