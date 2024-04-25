<?php

include 'config.php';


$agent_code = $_POST['agent_code'];
$agent_name = $_POST['agent_name'];
$working_area = $_POST['working_area'];
$commission = $_POST['commission'];
$phone_no = $_POST['phone_no'];
$country = $_POST['country'];


$query = "UPDATE agents SET AGENT_NAME='$agent_name', WORKING_AREA='$working_area', COMMISSION='$commission', PHONE_NO='$phone_no', COUNTRY='$country' WHERE AGENT_CODE='$agent_code'";

if ($conn->query($query) === TRUE) {
   
    header("Location: list_daftar_agent.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>
