<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="POST">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="address">Address</label><br>
        <input type="text" name="address" id="address"><br>
        <label for="gender">Gender</label><br>
        <select name="gender" id="gender"><br>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
        <label for="position">Position</label><br>
        <input type="text" name="position" id="position"><br>
        <label for="status">Status</label><br>
        <select name="status" id="status"><br>
            <option value="fulltime">Full Time</option>
            <option value="parttime">Part Time</option>
        </select><br><br>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</body>
</html>