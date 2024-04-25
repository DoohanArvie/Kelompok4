<?php


include 'config.php';

$query = "SELECT * FROM customer";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Daftar Pelanggan</h1>

    <a href="form_tambah_customer.php" class="btn btn-primary mb-4">Tambah Data Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cust Code</th>
                <th>Cust Name</th>
                <th>Cust City</th>
                <th>Working Area</th>
                <th>Cust Country</th>
                <th>Grade</th>
                <th>Opening Amount</th>
                <th>Receive Amount</th>
                <th>Payment Amount</th>
                <th>Outstanding Amount</th>
                <th>Phone No</th>
                <th>Agent Code</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['CUST_CODE']; ?></td>
                        <td><?php echo $row['CUST_NAME']; ?></td>
                        <td><?php echo $row['CUST_CITY']; ?></td>
                        <td><?php echo $row['WORKING_AREA']; ?></td>
                        <td><?php echo $row['CUST_COUNTRY']; ?></td>
                        <td><?php echo $row['GRADE']; ?></td>
                        <td><?php echo $row['OPENING_AMT']; ?></td>
                        <td><?php echo $row['RECEIVE_AMT']; ?></td>
                        <td><?php echo $row['PAYMENT_AMT']; ?></td>
                        <td><?php echo $row['OUTSTANDING_AMT']; ?></td>
                        <td><?php echo $row['PHONE_NO']; ?></td>
                        <td><?php echo $row['AGENT_CODE']; ?></td>
                        <td>
                            <a href="form_edit_customer.php?cust_code=<?php echo $row['CUST_CODE']; ?>" class="btn btn-primary">Edit</a>
                            <a href="hapus_customer.php?cust_code=<?php echo $row['CUST_CODE']; ?>" class="btn btn-danger">Delete</a> 
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else : ?>
                <tr>
                    <td colspan="13" class="text-center">Tidak ada data pelanggan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

  
    <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php

$conn->close();
?>
