<?php
require 'koneksi.php';

if (isset($_POST["tambah"])) {
    $nama_member = htmlspecialchars($_POST["nama_member"]);
    $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $date = htmlspecialchars($_POST["date"]);

    $sql = "INSERT INTO data_member VALUES ('','$nama_member', '$tempat_lahir', '$alamat', '$date')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'tabelDataMember.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/cssForm.css">
    <title>Member Form</title>

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
                <li><a href="tabelDataMember.php">Data Member</a></li>
                <li><a href="mailto:muhammadrezaubaidillah@gmail.com">Contact</a></li>
            </ul>
        </nav>
        <button class="btn-cta" onclick="redirInstagram()">Follow Saya</button>
    </header>
    <div class="container">
        <main>
          <div>
            <h2>Member Form</h2> 
            <br>
            <br>
          </div>
        
          <div>
            <div>
              <h4>Billing address</h4>
              <br>
              <br>
              <form class="needs-validation" action="" method="post" >
                <div>

                  <div>
                    <label>Nama</label>
                    <input type="text" id="text" placeholder="Muhammad Reza Ubaidillah" name="nama_member" required>
                  </div>
                  <div>
                    <label>Tempat Lahir</label>
                    <input type="text"  id="username" placeholder="Samarinda" name="tempat_lahir" required>
                  </div>
      
                  <div>
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text"  id="address" placeholder="Jalan Pemuda 2 GG 2" name="alamat" required>
                  </div>
                  <div>
                    <label>Date</label> <br>
                    <input type="date" name="date">
                  </div>
                  <div>
                    <input type="submit" name="tambah">
                  </div>

                
              </form>
            </div>
          </div>
        </main>
        <footer>
            <p class="mb-1">&copy; Muhammad Reza  Website 2022</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Privacy</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
          </footer>
    </div>
    <script>
        function redirInstagram() {
            window.location.href = "https://www.instagram.com/mrezaubaidillah_"
        }
    </script>
    <script src="js/tes.js"></script>
</body>
</html>