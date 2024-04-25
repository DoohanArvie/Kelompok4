<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 50px 20px;
            text-align: center;
        }
        h1 {
            color: #343a40;
        }
        h2 {
            color: #343a40;
            margin-top: 30px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #007bff;
            position: relative;
            display: inline-block;
            font-weight: bold;
            background-color: #ffc107;
            padding: 10px 20px;
            border-radius: 5px;
        }
        a:hover {
            text-decoration: none;
        }
        .text-animated {
            display: inline-block;
            position: relative;
            animation: slideIn 0.5s ease;
        }
        @keyframes slideIn {
            0% { transform: translateY(-20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Selamat Datang di MELBYU ROOM</h1>

    <h2>Pilih Menu</h2>
    <ul>
        <li><a href="list_daftar_agent.php"><span class="text-animated">Daftar Agen</span></a></li>
        <li><a href="list_daftar_customer.php"><span class="text-animated">Daftar Pelanggan</span></a></li>
    </ul>

    <p>Jika Anda membutuhkan bantuan, silakan hubungi admin.</p>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
