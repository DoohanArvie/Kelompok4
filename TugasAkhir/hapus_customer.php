<?php

include 'config.php';


if (isset($_GET['cust_code'])) {
    $cust_code = $conn->real_escape_string($_GET['cust_code']);

   
    $query = "DELETE FROM customer WHERE CUST_CODE='$cust_code'";

 
    if ($conn->query($query) === TRUE) {
      
        header("Location: list_daftar_customer.php");
        exit(); 
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "Parameter cust_code tidak ditemukan dalam URL.";
}


$conn->close();
?>
