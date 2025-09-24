<?php

$userError = "";
$passError = "";

if (!isset($_POST['username'])) {
    $userError = "Please fill in the username";
}

if (!isset($_POST['password']) || empty($_POST[password])){
    $passError = "Please fill in the password";
}



print "<!DOCTYPE html>";
print "<html lang=\"en\">";
print "<head>";
print "<title>Minimal Page</title>";
print "</head>";
print "<body>";
print "<h1>Hello World</h1><br>";
print "<form action='login-process.php' method='POST'>";
print "USER: <input type='text' name='username'> . $userError . <br>";
print "PASSWORD: <input type='password' name='password'> . $passError . <br>";
print "<input type='submit' name='submit_form'>";
print "</form>";
print "</body>";
print "</html>";
?>