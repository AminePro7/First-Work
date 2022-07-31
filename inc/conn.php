<?php 
//To connect to DB
$conn=mysqli_connect('sql307.epizy.com','epiz_32094911','pTIHFCBcRMxCrJ','epiz_32094911_win');

//To Verify the connection
//If failed we should know the error
if(!$conn) {
    echo 'Error: ' .mysqli_connect_error();
}

