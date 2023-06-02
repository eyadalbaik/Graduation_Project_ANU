<?php

  // if (!isset($_SESSION['admin_name'])) {
  //   $_SESSION['msg'] = "You must log in first";
  //   header('location: ../index.php');
  // }
  // if (isset($_GET['logout'])) {
  //   session_destroy();
  //   unset($_SESSION['admin_name']);
  //   header("location: ../index.php");
  // }

  session_start();
  session_destroy();
  header("location:../index.php");





?>