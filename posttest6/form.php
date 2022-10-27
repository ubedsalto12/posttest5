<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/cssForm.css">
    <title>Form Member</title>

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
                <li><a href="dataMember.php">Data Member</a></li>
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
              <form class="needs-validation" action="outputForm.php" method="post" >
                <div>

                  <div>
                    <label>Full Name</label>
                    <input type="text" id="text" placeholder="Muhammad Reza Ubaidillah" name="nama" required>
                  </div>
                  <div>
                    <label>Username</label>
                    <input type="text"  id="username" placeholder="Username" name="username" required>
                  </div>
  
                  <div>
                    <label>Email</label>
                    <input type="email"  id="email" placeholder="you@example.com"name="email">
                  </div>
      
                  <div>
                    <label for="address" class="form-label">Address</label>
                    <input type="text"  id="address" placeholder="Jalan Pemuda 2 GG 2" name="address" required>
                  </div>
      
                  <div>
                    <label>Phone Number</label>
                    <input type="tel" pattern="[0-9]{12}"  id="address2"name="phonenumber" placeholder="081234567891" required>
                  </div>
      
                  <div>
                    <label>Country</label>
                    <select id="country" name="country" required>
                      <option value="">Choose...</option>
                      <option value="indonesia">Indonesia</option>
                    </select>
                  </div>
      
                  <div>
                    <label>State</label>
                    <select id="state" name="state" required>
                      <option value="">Choose...</option>
                      <option value="samarinda">Samarinda</option>
                      <option value="balikpapan">Balikpapan</option>
                      <option value="tenggarong">Tenggarong</option>
                    </select>
                  </div>
                <div>
                <input type="submit" value="SUBMIT">
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