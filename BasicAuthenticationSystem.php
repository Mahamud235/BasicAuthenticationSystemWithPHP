<?php
define("USERNAME", "Admin");
define("PASSWORD", "12345678");

echo "Enter User Name :" ;
$username = readline();

echo "Enter Password:" ;
$password = readline();

if ($username === USERNAME && $password === PASSWORD ) {
 echo "Login Successful" ;
} else {
    echo "Login Fail, Username or Password not matching" ;
}