<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "curd1";

$con = mysqli_connect($host, $user, $pass, $db);

if($con) {
    echo "";

}
else
    {
echo "Db not connect";
}
?>