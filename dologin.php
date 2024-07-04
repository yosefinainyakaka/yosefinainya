<?php
require_once 'db.php';

$data['username'] = $_POST['username'];
$data['password'] = $_POST['password'];
echo $data['username'];
$query ="SELECT * FROM user where username='{$data['username']}' and password='{$data['password']}'";
$getdata = mysqli_query($conn,$query);
$idata = [];
$numrows = mysqli_num_rows($getdata); 
if ($numrows > 0) {
    while ($rows =  mysqli_fetch_assoc($getdata)) {
        // var_dump($rows);
        $_SESSION['username'] = $rows['username'];
        $_SESSION['id'] = $rows['id'];
    }
}

if(isset($_SESSION['username'])) header("location: dashboard.php");
?>