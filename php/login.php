<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
   

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    
    if (!strlen($email) || !strlen($password)) {
        die('Please enter a username and password');
    }
    
    $success = false;
    
    $handle = fopen("../storage/users.csv", "r");

    
    while (($data = fgetcsv($handle)) !== FALSE) {
        if ($data[1] == $email && $data[2] == $password) {
            $success = true;
            break;
        }
    }
    
    fclose($handle);
    
    if ($success == true) {
        // they logged in ok
        echo 'it is you';
        $_SESSION[$username];
        header("Location: dashboard.php");
   exit;
}else{
    echo 'not you';
    header("Location: login.php");
   exit;
}
}
?>


