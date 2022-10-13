<?php
$reg = $_POST;
echo 'Name:'.$reg['name'].'<br/>';
echo 'Email:'.$reg['email'].'<br/>';
echo 'Date of birth:'.$reg['date'].'<br/>';
echo 'Gender:'.$reg['gender'].'<br/>';
echo 'Country:'.$reg['country'].'<br/>';

$filename = fopen('userdata.csv', 'a');
$handle = fwrite($filename, $reg['name']. "\n". $reg['email']. "\n". $reg['date']. "\n". $reg['gender']. "\n". $reg['country']. "\n"). "\n";
print_r($reg);
fclose($filename);
?>
