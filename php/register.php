
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    .container {
            display: flex;
            align-items: center;
            height: 80vh;
            justify-content: center;
        }

        h1 {
            padding: 4rem 10rem;
            background-color: rgb(174, 174, 174);
        }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <h2>ZURI-PHP</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item f-right">
                    <a class="nav-link" href="forms/register.html">BACK</a>
                </li>
                <li class="nav-item f-right">
                    <a class="nav-link " href="forms/login.html">LOGIN</a>
                </li>
        </div>
</nav>
<div class="container">
<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $filename = fopen('../storage/users.csv', 'a');
    $length = array(
        "1" => $username,
        "2"=> $email,
        "3"=> $password
    );

    $handle = fputcsv($filename, $length, ',');
    fclose($filename);
    echo "<h1>User Sucessfully Registered</h1>";
}
?>
</div>

</body>
</html>

