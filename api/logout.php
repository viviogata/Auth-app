<?php

session_start();

unset($_SESSION['logged']);

session_destroy();

header("Location: ../front/index.php");

?>