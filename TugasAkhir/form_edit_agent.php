<?php
// Sertakan file konfigurasi database
include 'config.php';

// Ambil parameter agent_code dari URL
$agent_code = $_GET['agent_code'];

// Query untuk mendapatkan data agen berdasarkan agent_code
$query = "SELECT * FROM agents WHERE AGENT_CODE = '$agent_code'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Ambil data agen dari database
    $agent_code = $row['AGENT_CODE'];
    $agent_name = $row['AGENT_NAME'];
    $working_area = $row['WORKING_AREA'];
    $commission = $row['COMMISSION'];
    $phone_no = $row['PHONE_NO'];
    $country = $row['COUNTRY'];
} else {
    // Jika tidak ada data agen dengan agent_code yang diberikan, redirect ke halaman list_daftar_agent.php
    header("Location: list_daftar_agent.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Agen</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Edit Data Agen</h1>
    <form action="proses_edit_agent.php" method="POST">
        <input type="hidden" name="agent_code" value="<?php echo $agent_code; ?>">
        <div class="form-group">
            <label for="agent_name">Agent Name</label>
            <input type="text" class="form-control" id="agent_name" name="agent_name" value="<?php echo $agent_name; ?>" required>
        </div>
        <div class="form-group">
            <label for="working_area">Working Area</label>
            <input type="text" class="form-control" id="working_area" name="working_area" value="<?php echo $working_area; ?>" required>
        </div>
        <div class="form-group">
            <label for="commission">Commission</label>
            <input type="text" class="form-control" id="commission" name="commission" value="<?php echo $commission; ?>" required>
        </div>
        <div class="form-group">
            <label for="phone_no">Phone No</label>
            <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?php echo $phone_no; ?>" required>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="<?php echo $country; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="list_daftar_agent.php" class="btn btn-secondary">Batal</a>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
