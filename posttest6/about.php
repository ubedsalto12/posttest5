<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <script type="javascript"></script>
    <title>YokOlahraga</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/gambar3.jpg" alt="logo" class="logo-img" />
            <h1 class="logo-title">Yok Olahraga</h1>
        </div>
        
        <nav>
            <ul>
                <li><input type="checkbox" id="checkbox"></li>  
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="dataMember.php">Data Member</a></li>
                <li><a href="mailto:muhammadrezaubaidillah@gmail.com">Contact</a></li>
            </ul>
        </nav>
        <button class="btn-cta" onclick="redirInstagram()">Follow Saya</button>
    </header>
    <div class="container">
        <div class="intro">
            <p class="title">Hello!</p>
            <p class="description" >Nama :Muhammad Reza Ubaidillah</p>
            <p class="description" >NIM : 2109106084</p>
            <p class="description" >Kelas : Informatika B 2 2021</p>
            <p class="description" >Asal : Samarinda, Kalimantan Timur</p>
            <p class="description" >Pendidikan Terakhir : SMA</p>
            <p class="description" >Alumni : SMA Negeri 10 Samarinda</p>
            <img src="img/gambar4.jpg" alt="gambar diri" class="profil">
        </div>
    </div>
    <footer>
        <p class="title">&copy; Muhammad Reza  Website 2022</p>
    </footer>
    
    <script>
        function redirInstagram() {
            window.location.href = "https://www.instagram.com/mrezaubaidillah_"
        }
    </script>

    <script src="js/tes.js"></script>

</body>
</html>