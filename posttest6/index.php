<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
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
                <li><a href="tabelDataMember.php">Data Member</a></li>
                <li><a href="mailto:muhammadrezaubaidillah@gmail.com">Contact</a></li>
            </ul>
        </nav>
        <button class="btn-cta" onclick="redirInstagram()">Follow Saya</button>
    </header>
    <div class="container">
        <div class="intro">
            <p class="title">Hello!</p>
            <p class="description">Yok Kita Olahraga.</p>
            <img src="img/gambar.jpg"  class="img-foto"/>
        </div>
    </div> 
    <div class="parallax">
        <div class="tentang">
            <p class="title">Mari Berolahraga</p>
            <p class="description">Kesehatan adalah anugerah terindah yang terkadang lupa untuk kita syukuri.</p>
            <div class="mt-10">
                <button class="btn-cta"><a href = "form.php"> Member Sekarang</a></button>
            </div>
        </div>
        <div class="container">
                <div class="card" id="jasa">
                    <div class="card-item">
                        <p class="card-title">1 Week Personal trainer</p>
                        <p class="card-description">Rp 1 000 000</p>
                    </div>
                    <div class="card-item">
                        <p class="card-title">2 Week Personal trainer</p>
                        <p class="card-description">Rp 2 000 000</p>
                    </div>
                    <div class="card-item">
                        <p class="card-title">3 Week Personal trainer</p>
                        <p class="card-description">Rp 3 000 000</p>
                    </div>
                </div>
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