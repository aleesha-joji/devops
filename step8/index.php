<?php
header("content-type: text");
$host = "db";
$username = "root";
$pw = "my!!root!!!pw";

$conn = new mysqli($host, $username, $pw);

if($conn->connect_errno > 0) {
    echo $db->connect_error;
}
else{
    echo "DB CONNECTION SUCCESSFULL \n\n";

}