<?php

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
    $Amount = $_POST['Amount'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "test";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,);
       
?>