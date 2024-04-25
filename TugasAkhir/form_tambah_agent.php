<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Agent</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Tambah Data Agen</h1>
    <form action="proses_tambah_agent.php" method="POST">
        <div class="form-group">
            <label for="agent_code">Agent Code</label>
            <input type="text" class="form-control" id="agent_code" name="agent_code" required>
        </div>
        <div class="form-group">
            <label for="agent_name">Agent Name</label>
            <input type="text" class="form-control" id="agent_name" name="agent_name" required>
        </div>
        <div class="form-group">
            <label for="working_area">Working Area</label>
            <input type="text" class="form-control" id="working_area" name="working_area" required>
        </div>
        <div class="form-group">
            <label for="commission">Commission</label>
            <input type="text" class="form-control" id="commission" name="commission" required>
        </div>
        <div class="form-group">
            <label for="phone_no">Phone No</label>
            <input type="text" class="form-control" id="phone_no" name="phone_no" required>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
