<?php

include 'config.php';


$cust_code = $_POST['cust_code'];
$cust_name = $_POST['cust_name'];
$cust_city = $_POST['cust_city'];
$working_area = $_POST['working_area'];
$cust_country = $_POST['cust_country'];
$grade = $_POST['grade'];
$opening_amt = $_POST['opening_amt'];
$receive_amt = $_POST['receive_amt'];
$payment_amt = $_POST['payment_amt'];
$outstanding_amt = $_POST['outstanding_amt'];
$phone_no = $_POST['phone_no'];
$agent_code = $_POST['agent_code'];


$query = "INSERT INTO customer (CUST_CODE, CUST_NAME, CUST_CITY, WORKING_AREA, CUST_COUNTRY, GRADE, OPENING_AMT, RECEIVE_AMT, PAYMENT_AMT, OUTSTANDING_AMT, PHONE_NO, AGENT_CODE) 
          VALUES ('$cust_code', '$cust_name', '$cust_city', '$working_area', '$cust_country', '$grade', '$opening_amt', '$receive_amt', '$payment_amt', '$outstanding_amt', '$phone_no', '$agent_code')";

if ($conn->query($query) === TRUE) {
    echo '<div class="alert alert-success mt-5" role="alert">Data pelanggan berhasil ditambahkan.</div>';
   
    header("refresh:2;url=list_daftar_customer.php");
} else {
    echo '<div class="alert alert-danger mt-5" role="alert">Gagal menambahkan data pelanggan: ' . $conn->error . '</div>';
}


$conn->close();
?>
