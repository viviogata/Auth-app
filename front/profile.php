<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <title>Profile</title>
</head>
<body>
<?php   
        session_start();
        $logged = isset($_SESSION['logged']) ? $_SESSION['logged'] : FALSE;
        if (!$logged) {
            header("Location: ../front/profile.php?message=no_user_loggedin");
        }
        require '../api/connection.php';
        $email = $_SESSION['email'];
        
      $sql = "SELECT * FROM users WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) != 0) {
        foreach ($result as $row) {
		  $firstname = $row["firstname"];
		  $lastname = $row["lastname"];
      $email = $row["email"];
      $country = $row["country"];
      $state = $row["state"];
      $phone = $row["phone"];
      $bio = $row["bio"];
	}
}
?>

<!-- Profile -->
  <div id="app">
    <div class="container">
        <div class="profile-header">
          <div class="profile-img">
            <img src="img/avatar.svg" alt="Profile Image">
          </div>
          <div class="profile-option">
            <a href="../api/logout.php" class="fas fa-sign-out-alt"></a>
          </div>
        </div>      
        <div class="main-bd">
          <div class="left-side">
            <div class="profile-side">
              <h2 class="name"><?php echo $firstname ?> <?php echo $lastname ?></h2>
              <p><i class="fas fa-map-marker-alt"></i><?php echo $country ?>,<?php echo $state ?></p>
              <p class="mobile-no"><i class="fa fa-phone"></i><?php echo $phone ?></p>
              <p class="user-mail"><i class="fa fa-envelope"></i><?php echo $email ?></p>
            </div>      
          </div>
          <div class="right-side">      
            <div class="profile-body">
              <div class="profile-info">
                <h1>About me</h1>
                <p><?php echo $bio?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="js/main.js"></script>
</body>
</html>