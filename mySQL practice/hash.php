<?php
//transforming sensitive data(password) into letters, numbers, and/or symbols via a mathematical process.
$password = "Pizza123";
//1.password_hash
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash . "<br>";
//2.password_verify
if (password_verify("Pizza123d", $hash)) {
    echo "You are logged in!!";
} else {
    echo "You are not log in!!";
}
