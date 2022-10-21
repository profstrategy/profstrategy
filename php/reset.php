<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password
    $filename = fopen('../storage/users.csv', 'r');
    $file = array(
        '1' => $newpassword
    );
    $data = fgetcsv($filename);
    if($data['2'] == $email){
        fputcsv($filename, $file, ",");
        echo "Done";
    }else{
        echo "User does not exist";
    }
    fclose($filename);
    
}
// echo "HANDLE THIS PAGE";


