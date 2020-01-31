<?php

require 'connection.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) != 0) {
            foreach ($result as $row) {

                $email = $row['email'];
                session_start();
                $_SESSION['logged'] = TRUE;
                $_SESSION['email'] = $email;

                header('Location: ../front/profile.php');
            }   
        } else {
            header('Location: ../front/index.php?error=user_not_found');
        }
        mysqli_close($conn);
    } else {    
        header('Location: ../index.php?error=email_field');
    }
}

?>
