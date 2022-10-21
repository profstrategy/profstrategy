<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
session_start();
 

if(isset($_SESSION[$username])){
    unset($_SESSION[$username]);
    header("location: login.php");
}
}

echo "HANDLE THIS PAGE";
