<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KLUG</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
</head>
<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    margin: 0;
    background-color: #ffffff;
    font-family: "Ubuntu", serif;
    font-weight: 400;
    font-style: normal;
  }

  .header {
    width: 100%;
    height: 80px;
    background: linear-gradient(to right, #46074e, #197bd0 80%);
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
  }

  .logo-container {
    display: flex;
    align-items: center;
  }

  .header .logo {
    font-size: 30px;
    font-weight: bold;
    display: flex;
    align-items: center;
    color: white;
    margin-top: 1%;
  }

  .header .logo p {
    color: #ffffff;
    margin-left: 100px;
  }

  .header .logo::before {
    content: "";
    display: block;
    width: 40px;
    height: 2px;
    background-color: white;
    margin-top: 20px;
    position: absolute;
    left: 8%;
  }

  .header .logo p::before {
    content: "";
    display: block;
    width: 2%;
    height: 2px;
    background-color: white;
    margin-top: 10px;
    position: absolute;
    left: 10%;
  }

  @media (max-width: 768px) {
    .header .logo {
      font-size: 24px;
    }

    .header .logo p::before {
      width: 4%;
      left: 19%;
    }

    .header .logo::before {
      width: 5%;
      left: 16%;
      margin-bottom: 2%;
    }
  }

  .nav-links {
    display: flex;
    gap: 20px;
  }

  .nav-links a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    padding: 10px;
    transition: color 0.3s;
  }

  .nav-links a:hover {
    color: #fcfbfdc8;
  }

  .search input {
    border: none;
    border-bottom: 2px solid rgba(253, 246, 246, 0.559);
    background: transparent;
    color: white;
    outline: none;
    padding: 5px;
  }

  .search input::placeholder {
    color: rgba(253, 246, 246, 0.559);
    font-size: 15px;
  }

  .btn-primary {
    background-color: #195395;
    border-radius: 20px;
    padding: 10px 20px;
    font-size: 13px;
    margin-right: 20px;
  }

  .hamburger {
    display: none;
    font-size: 30px;
    cursor: pointer;
    margin-right: 20px;
  }

  @media (max-width: 768px) {
    .nav-links {
      display: none;
      flex-direction: column;
      background: linear-gradient(to right, #46074e, #197bd0 80%);
      position: absolute;
      top: 80px;
      right: 0;
      width: 100%;
      text-align: center;
    }

    .nav-links.show {
      display: flex;
    }

    .nav-links a {
      padding: 10px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hamburger {
      display: block;
    }
  }

  /* back gambar */
  .back {
    position: relative;
    margin-top: 80px;
  }

  .back img {
    width: 100%;
    height: 600px;
    position: relative;
  }

  .back::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right,
        #46074e9f 0%,
        rgba(70, 7, 78, 0.495) 30%,
        rgba(25, 123, 208, 0.247) 100%,
        #197bd000 100%);
    z-index: 1;
  }

  .back .overlay {
    position: absolute;
    top: 90%;
    left: 7%;
    border-radius: 10px;
    color: white;
    z-index: 2;
  }

  .back .overlay h2 {
    font-size: 36px;
  }

  .hubungi-kami-form {
    max-width: 60%;
    margin: auto;
    margin-top: 20px;
  }

  .divider {
    height: 1px;
    background-color: #e0e0e0;
    width: 100%;
    max-width: 1140px;
    margin: 60px auto;
    opacity: 0.5;
  }

  .container-hub {
    padding: auto;
    margin-left: 25%;
    margin-right: 25%;
  }

  .container-hub .hub-sub {
    text-align: left;
    margin-bottom: 30px;
    font-size: 24px;
    color: #4a4a4a;
    margin-top: 10%;
    font-weight: normal;
  }

  .container-hub h6 {
    text-align: left;
    margin-bottom: 20px;
    color: #4a4a4a;
    font-size: 18px;
  }

  .container-hub p {
    text-align: left;
    margin-bottom: 20px;
    color: #4a4a4a;
    font-family: "Ubuntu", serif;
    font-weight: 300;
    font-style: normal;
  }

  .footer {
    background: linear-gradient(to right, #46074e, #197bd0);
    color: white;
    text-align: center;
    padding: 15px 0;
    margin-top: 60px;
    width: 100%;
    height: 80px;
  }

  .footer p {
    margin-top: 20px;
    font-size: 14px;
    color: white;
    opacity: 0.9;
    text-align: center;
  }

  .btn-kirim {
    width: 200px;
    height: 45px;
    padding: 0;
    border: none;
    outline: none;
    position: relative;
    z-index: 1;
    border-radius: 23px;
    background: linear-gradient(to right, #46074e, #197bd0);
    cursor: pointer;
    display: inline-block;
    text-align: center;
    line-height: 45px;
    color: #336195;
  }

  .btn-kirim::before {
    content: "";
    position: absolute;
    left: 1px;
    right: 1px;
    top: 1px;
    bottom: 1px;
    border-radius: 22.5px;
    background-color: white;
    z-index: -1;
    transition: 200ms
  }

  .btn-kirim::after {
    content: attr(data);
    font-size: 15px;
    background: linear-gradient(to right, #46074e, #197bd0);
    -webkit-background-clip: text;
    transition: 200ms;
  }


  .btn-kirim:hover::before {
    opacity: 50%;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    color: wheat;


  }
</style>

<body>
  <header class="header">
    <div class="logo-container">
      <div class="logo">
        <p>klug</p>
      </div>
    </div>
    <nav>
      <span class="hamburger" onclick="toggleMenu()">
        <i class="fa fa-bars"></i>
      </span>
      <div class="nav-links" id="navLinks">
        <a href="home.html">Home</a>
        <a href="tentangkami.html">Tentang Kami</a>
        <a href="#">Layanan Kami</a>
        <a href="#">Artikel</a>
        <a href="hubungi.php">Hubungi Kami</a>
      </div>
    </nav>
    <div class="search d-none d-md-block">
      <i class="fa fa-search" style="font-size:14px; color:rgba(253, 246, 246, 0.559) ;"></i>
      <input type="text" placeholder="Ketik pencarian" />
    </div>
    <button class="btn btn-primary">DAFTAR ON-LINE</button>
  </header>
  <script>
    function toggleMenu() {
      const navLinks = document.getElementById("navLinks");
      navLinks.classList.toggle("show");
    }
  </script>

  <div class="back">
    <img src="img/HUB.jpeg" alt="yak" />
    <div class="overlay">
      <h2>HUBUNGI KAMI</h2>
    </div>
  </div>
  <div class="hubungi-kami-form">
    <h3 style="font-weight: normal; margin-bottom: 50px;">KIRIM PESAN</h3>
    <div class="row mb-4">
      <div class="col-6 mb-3">
        <label for="nama" class="mb-3">Nama *</label>
        <input type="text" class="form-control" id="nama" required placeholder="Nama lengkap anda">
      </div>
      <div class="col-6 mb-3">
        <label for="email" class="mb-3">Email *</label>
        <input type="email" class="form-control" id="email" required placeholder="Email anda">
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-6 mb-3">
        <label for="perusahaan" class="mb-3">Perusahaan / Organisasi</label>
        <input type="text" class="form-control" id="perusahaan" placeholder="Perusahaan / Organisasi">
      </div>
      <div class="col-6 mb-3">
        <label for="telepon" class="mb-3">Telepon</label>
        <input type="text" class="form-control" id="telepon" placeholder="No Telepon anda">
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-12 mb-3">
        <label for="pesan" class="mb-3">Pesan *</label>
        <textarea class="form-control" id="pesan" required placeholder="Tulis pesan anda" ;></textarea>
      </div>
    </div>
    <div class="d-flex justify-content-between">
      <div class="g-recaptcha" data-sitekey="6LdXZrUqAAAAAMTdLjQu1g6Lz3U-nwPwClSkUWmq"></div>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <div>
        <button id="kirim" class="btn-kirim">Kirim Pesan</button>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#kirim').click(function(e) {
        e.preventDefault();

        // Ambil data dari form
        const nama = $('#nama').val().trim();
        const email = $('#email').val().trim();
        const perusahaan = $('#perusahaan').val().trim();
        const telepon = $('#telepon').val().trim();
        const pesan = $('#pesan').val().trim();
        const recaptchaResponse = grecaptcha.getResponse();
        if (!nama || !email || !perusahaan || !telepon || !pesan) {
          alert('Semua field harus diisi.');
          return;
        }

        // Validasi CAPTCHA
        if (!recaptchaResponse) {
          alert('Please complete the CAPTCHA.');
          return;
        }

        // Kirim data dengan AJAX
        $.ajax({
          url: 'simpan_pesan.php',
          method: 'POST',
          data: {
            nama: nama,
            email: email,
            perusahaan: perusahaan,
            telepon: telepon,
            pesan: pesan,
            recaptcha_response: recaptchaResponse,
          },
          success: function(response) {
            alert(response);
            // Reset form jika berhasil
            $('#nama, #email, #perusahaan, #telepon, #pesan').val('');
            grecaptcha.reset();
          },
          error: function() {
            alert('Terjadi kesalahan. Silakan coba lagi.');
          },
        });
      });
    });
  </script>
  <div class="divider"></div>
  <section class="Hubungi Kami">
    <div class="container-hub">
      <h2 class="hub-sub">LOKASI KAMI</h2>
      <h6>KANTOR PUSAT</h6>
      <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
        <br> Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701
        <br> Hotline: +6281519040071 / +62811998167
      </p>
      <h6>KANTOR CABANG</h6>
      <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
        <br>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701
        <br>Hotline: +6281519040071 / +62811998167
      </p>

    </div>
    <footer class="footer">
      <p>Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
    </footer>

</body>

</html>