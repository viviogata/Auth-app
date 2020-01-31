<?php
 require 'connection.php';

 if(isset($_GET['action'])){
     $action = $_GET['action'];
 }

 if($action == 'create'){
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $country = $_POST['country'];
     $state = $_POST['state'];
     $phone = $_POST['phone'];
     $bio = $_POST['bio'];
     $password = $_POST['password'];


     $sql = $conn->query("INSERT INTO users (firstname, lastname, email, country, state, phone, bio, password)
        VALUES('$firstname','$lastname', '$email', '$country', '$state', '$phone', '$bio','$password')");
        if($sql){
            $result['message'] = "User added successfully!";
        }
        else{
            $result['error'] = true;
            $result['message'] = "Failed to add user!";
        }  
}
echo json_encode($result);
?>