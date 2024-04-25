<?php

include 'config.php';


if (isset($_GET['agent_code'])) {
    $agent_code = $conn->real_escape_string($_GET['agent_code']);

    
    $query = "DELETE FROM agents WHERE AGENT_CODE='$agent_code'";

  
    if ($conn->query($query) === TRUE) {
        
        header("Location: list_daftar_agent.php");
        exit(); 
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} else {
    echo "Parameter agent_code tidak ditemukan dalam URL.";
}


$conn->close();
?>
