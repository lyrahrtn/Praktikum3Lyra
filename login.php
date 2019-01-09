<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "lyra" && $password == "hehehe")
{
    header("location: read.php");
}
else
{
    header("location: TugasLogin.php");
    
}

?>