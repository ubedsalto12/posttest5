<?php
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$country = $_POST['country'];
$state = $_POST['state'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Tampilan Form</title>
</head>
<body>
<header>
        <div class="logo">
            <img src="img/gambar3.jpg" alt="logo" class="logo-img" />
            <h1 class="logo-title">Yok Olahraga</h1>
        </div>
        <nav>
            <ul>
                <li><input type="checkbox" id="checkbox1"></li>   
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="tabelDataMember.php">Tabel Member</a></li>   
                <li><a href="mailto:muhammadrezaubaidillah@gmail.com">Contact</a></li>
            </ul>
        </nav>
        <button class="btn-cta" onclick="redirInstagram()">Follow Saya</button>
    </header>
    <br>
    <br>
    <br>
    <div class="intro">
        <h1>Hasil Form</h1>
            <div class="intro">
                <p class="description" >Nama : <?php echo $nama;?></p>
                <p class="description" >Username : <?php echo $username;?></p>
                <p class="description" >email : <?php echo $email;?></p>
                <p class="description" >address : <?php echo $address;?></p>
                <p class="description" >country : <?php echo $country;?></p>
                <p class="description" >state : <?php echo $state;?></p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

          <script>
        function redirInstagram() {
            window.location.href = "https://www.instagram.com/mrezaubaidillah_"
        }
        
    </script>
</body>
</html>


