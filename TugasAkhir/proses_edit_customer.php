<?php

include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!empty($_POST['cust_code']) && !empty($_POST['cust_name']) && !empty($_POST['cust_city']) && !empty($_POST['working_area']) && !empty($_POST['cust_country']) && !empty($_POST['grade']) && !empty($_POST['opening_amt']) && !empty($_POST['receive_amt']) && !empty($_POST['payment_amt']) && !empty($_POST['outstanding_amt']) && !empty($_POST['phone_no']) && !empty($_POST['agent_code'])) {
        
       
        $cust_code = $conn->real_escape_string($_POST['cust_code']);
        $cust_name = $conn->real_escape_string($_POST['cust_name']);
        $cust_city = $conn->real_escape_string($_POST['cust_city']);
        $working_area = $conn->real_escape_string($_POST['working_area']);
        $cust_country = $conn->real_escape_string($_POST['cust_country']);
        $grade = $conn->real_escape_string($_POST['grade']);
        $opening_amt = $conn->real_escape_string($_POST['opening_amt']);
        $receive_amt = $conn->real_escape_string($_POST['receive_amt']);
        $payment_amt = $conn->real_escape_string($_POST['payment_amt']);
        $outstanding_amt = $conn->real_escape_string($_POST['outstanding_amt']);
        $phone_no = $conn->real_escape_string($_POST['phone_no']);
        $agent_code = $conn->real_escape_string($_POST['agent_code']);

  
        $query = "UPDATE customer SET 
                  CUST_NAME='$cust_name', 
                  CUST_CITY='$cust_city', 
                  WORKING_AREA='$working_area', 
                  CUST_COUNTRY='$cust_country', 
                  GRADE='$grade', 
                  OPENING_AMT='$opening_amt', 
                  RECEIVE_AMT='$receive_amt', 
                  PAYMENT_AMT='$payment_amt', 
                  OUTSTANDING_AMT='$outstanding_amt', 
                  PHONE_NO='$phone_no', 
                  AGENT_CODE='$agent_code' 
                  WHERE CUST_CODE='$cust_code'";


        if ($conn->query($query) === TRUE) {
            
            header("Location: list_daftar_customer.php");
            exit(); 
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        echo "Data yang diterima tidak lengkap.";
    }
}


$conn->close();
?>
