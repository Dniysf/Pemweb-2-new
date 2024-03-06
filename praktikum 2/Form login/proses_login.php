<?php

$name = $_GET["name"];
$password = $_GET["password"];

//username/Email & password

//$data = [$usename = "dniysf_@gmail.com"][$password = "deniganteng"]

$name = ["dniysf_@gmail.com"];
$password = ["deniganteng"];

if($name = "email"){
    $email = 'True';
}else{
    $email = 'email salah';
}

if($password = 
"password"){
    $hasil = 'True';
}else{
    $hasil = 'password salah';
}



//hasil input
echo "Email: $email";
echo "<br>Password: $hasil";
?>