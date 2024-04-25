<?php

include 'config.php';


if (isset($_GET['cust_code'])) {
    $cust_code = $conn->real_escape_string($_GET['cust_code']);

    
    $query = "SELECT * FROM customer WHERE CUST_CODE='$cust_code'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Edit Data Pelanggan</h1>

    <form action="proses_edit_customer.php" method="POST">
        <div class="form-group">
            <label for="cust_code">Cust Code:</label>
            <input type="text" class="form-control" id="cust_code" name="cust_code" value="<?php echo $row['CUST_CODE']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="cust_name">Cust Name:</label>
            <input type="text" class="form-control" id="cust_name" name="cust_name" value="<?php echo $row['CUST_NAME']; ?>">
        </div>
        <div class="form-group">
            <label for="cust_city">Cust City:</label>
            <input type="text" class="form-control" id="cust_city" name="cust_city" value="<?php echo $row['CUST_CITY']; ?>">
        </div>
        <div class="form-group">
            <label for="working_area">Working Area:</label>
            <input type="text" class="form-control" id="working_area" name="working_area" value="<?php echo $row['WORKING_AREA']; ?>">
        </div>
        <div class="form-group">
            <label for="cust_country">Cust Country:</label>
            <input type="text" class="form-control" id="cust_country" name="cust_country" value="<?php echo $row['CUST_COUNTRY']; ?>">
        </div>
        <div class="form-group">
            <label for="grade">Grade:</label>
            <input type="text" class="form-control" id="grade" name="grade" value="<?php echo $row['GRADE']; ?>">
        </div>
        <div class="form-group">
            <label for="opening_amt">Opening Amount:</label>
            <input type="text" class="form-control" id="opening_amt" name="opening_amt" value="<?php echo $row['OPENING_AMT']; ?>">
        </div>
        <div class="form-group">
            <label for="receive_amt">Receive Amount:</label>
            <input type="text" class="form-control" id="receive_amt" name="receive_amt" value="<?php echo $row['RECEIVE_AMT']; ?>">
        </div>
        <div class="form-group">
            <label for="payment_amt">Payment Amount:</label>
            <input type="text" class="form-control" id="payment_amt" name="payment_amt" value="<?php echo $row['PAYMENT_AMT']; ?>">
        </div>
        <div class="form-group">
            <label for="outstanding_amt">Outstanding Amount:</label>
            <input type="text" class="form-control" id="outstanding_amt" name="outstanding_amt" value="<?php echo $row['OUTSTANDING_AMT']; ?>">
        </div>
        <div class="form-group">
            <label for="phone_no">Phone No:</label>
            <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $row['PHONE_NO']; ?>">
        </div>
        <div class="form-group">
            <label for="agent_code">Agent Code:</label>
            <input type="text" class="form-control" id="agent_code" name="agent_code" value="<?php echo $row['AGENT_CODE']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
    } else {
        echo "Data pelanggan tidak ditemukan.";
    }
} else {
    echo "Parameter cust_code tidak ditemukan dalam URL.";
}
?>
