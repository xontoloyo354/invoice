<?php

  //header.php
  
  session_start();

  if(!isset($_SESSION["user_email"]))
  {
    header('location: login.html');
  }
  if (isset($_SESSION['timeout']) && (time() - $_SESSION['timeout'] > 10000)){
    session_start();
    session_destroy();
  }
  

?>
<!DOCTYPE html>
<html>

<head>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Azura Invoice</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles -->
  <link href="css/egm-invoice.css" rel="stylesheet"> 
  

  
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/logo-azura.svg">
  
</head>
<body>

