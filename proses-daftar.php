<?php

include("config.php");


if(isset($_POST['daftar'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO users (username, email, password) VALUE ('$username', '$email', '$password')";
    $query = mysqli_query($db, $sql);
	mysqli_query($query, $conn)

   
    if( $query ) {
      
        header('Location: indexx.php?status=sukses');
    } else {
        
        header('Location: indexx.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>