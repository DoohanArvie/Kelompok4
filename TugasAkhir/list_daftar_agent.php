<?php

include 'config.php';


$query = "SELECT * FROM agents";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Agen</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Daftar Agen</h1>

    <a href="form_tambah_agent.php" class="btn btn-primary mb-4">Tambah Data Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Agent Code</th>
                <th>Agent Name</th>
                <th>Working Area</th>
                <th>Commission</th>
                <th>Phone No</th>
                <th>Country</th>
                <th>Aksi</th> 
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['AGENT_CODE']; ?></td>
                        <td><?php echo $row['AGENT_NAME']; ?></td>
                        <td><?php echo $row['WORKING_AREA']; ?></td>
                        <td><?php echo $row['COMMISSION']; ?></td>
                        <td><?php echo $row['PHONE_NO']; ?></td>
                        <td><?php echo $row['COUNTRY']; ?></td>
                        <td>
                            <a href="form_edit_agent.php?agent_code=<?php echo $row['AGENT_CODE']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="hapus_agent.php?agent_code=<?php echo $row['AGENT_CODE']; ?>" class="btn btn-danger btn-sm">Delete</a> 
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data agen</td>
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
