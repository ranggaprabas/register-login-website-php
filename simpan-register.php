<?php

include('koneksi.php');

$username = $_POST['username'];
$email     = $_POST['email'];
$password     = MD5($_POST['password']);

//query insert data ke dalam database
$query = "INSERT INTO pengguna (username, email, password) VALUES ('$username', '$email', '$password')";        

if($connection->query($query)) {
    
    echo "success";

} else {
    
    echo "error";

}