<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pelanggan</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Tambah Data Pelanggan</h1>
    <form action="proses_tambah_customer.php" method="POST">
        <div class="form-group">
            <label for="cust_code">Cust Code</label>
            <input type="text" class="form-control" id="cust_code" name="cust_code" required>
        </div>
        <div class="form-group">
            <label for="cust_name">Cust Name</label>
            <input type="text" class="form-control" id="cust_name" name="cust_name" required>
        </div>
        <div class="form-group">
            <label for="cust_city">Cust City</label>
            <input type="text" class="form-control" id="cust_city" name="cust_city">
        </div>
        <div class="form-group">
            <label for="working_area">Working Area</label>
            <input type="text" class="form-control" id="working_area" name="working_area" required>
        </div>
        <div class="form-group">
            <label for="cust_country">Cust Country</label>
            <input type="text" class="form-control" id="cust_country" name="cust_country" required>
        </div>
        <div class="form-group">
            <label for="grade">Grade</label>
            <input type="number" class="form-control" id="grade" name="grade">
        </div>
        <div class="form-group">
            <label for="opening_amt">Opening Amount</label>
            <input type="number" class="form-control" id="opening_amt" name="opening_amt" required>
        </div>
        <div class="form-group">
            <label for="receive_amt">Receive Amount</label>
            <input type="number" class="form-control" id="receive_amt" name="receive_amt" required>
        </div>
        <div class="form-group">
            <label for="payment_amt">Payment Amount</label>
            <input type="number" class="form-control" id="payment_amt" name="payment_amt" required>
        </div>
        <div class="form-group">
            <label for="outstanding_amt">Outstanding Amount</label>
            <input type="number" class="form-control" id="outstanding_amt" name="outstanding_amt" required>
        </div>
        <div class="form-group">
            <label for="phone_no">Phone No</label>
            <input type="text" class="form-control" id="phone_no" name="phone_no" required>
        </div>
        <div class="form-group">
            <label for="agent_code">Agent Code</label>
            <input type="text" class="form-control" id="agent_code" name="agent_code" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
