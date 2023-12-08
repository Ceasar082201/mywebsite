<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Retrieve form data
    $fname = $_POST["fname"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    //Display submitted data
    echo "Name: " . $fname . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Phone: " . $phone . "<br>";
}
?>