<?php

include 'config.php';


$agent_code = $_POST['agent_code'];
$agent_name = $_POST['agent_name'];
$working_area = $_POST['working_area'];
$commission = $_POST['commission'];
$phone_no = $_POST['phone_no'];
$country = $_POST['country'];


$query = "INSERT INTO agents (AGENT_CODE, AGENT_NAME, WORKING_AREA, COMMISSION, PHONE_NO, COUNTRY) 
          VALUES ('$agent_code', '$agent_name', '$working_area', '$commission', '$phone_no', '$country')";

if ($conn->query($query) === TRUE) {
    echo '<div class="alert alert-success mt-5" role="alert">Data agen berhasil ditambahkan.</div>';
    
    header("refresh:2;url=list_daftar_agent.php");
} else {
    echo '<div class="alert alert-danger mt-5" role="alert">Gagal menambahkan data agen: ' . $conn->error . '</div>';
}


$conn->close();
?>
