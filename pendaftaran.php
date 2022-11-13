<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME | Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="./config/css/layout.css">
  <link rel="stylesheet" href="./config/css/bootstrap.min.css">
  <script src="./config/js/bootstrap.bundle.js"></script>
  <!-- icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <header>
    <section class="navigation">
      <div class="container">
        <div class="box-navigation">
          <div class="box">
           <h1>Logo</h1>
          </div>
          <div class="box menu-navigation">
            <ul>
              <li>
              <i class="ri-home-3-line"></i>
                <a href="index.php">Beranda</a></li>
                <li><a href="pendaftaran.php">Pendaftaran</a></li>
             <li>
             <i class="ri-information-line"></i>
              <a href="tampiltable.php">Lihat Table</a></li>
            </ul>
          </div>
          <div class="box menu-bar">
          <i class="ri-menu-3-line" style="color: white;"></i>
          </div>
        </div>
      </div>
    </section>
  <!-- end navigation -->

    <!-- form -->
  <section class="form" style="margin-top: 60px;">
      <form action="" method="POST" style="font-size: 20px;" enctype="multipart/form-data">
        <div class="container">
          <div class="box-form">
            <div class="box">
              <!-- bootstrap form -->
              <form class="row g-3">
                    <label for="inputEmail4" class="form-label">Nama</label>
                    <input type="text" autocomplete="off" class="form-control" id="inputEmail4" name="nama" style="width: 655px;">
                  </div>
                  <div class="col-md-6" style="margin-top: 30px;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                  </div>
                  <div class="col-md" style="margin-top: 30px;">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" name="lamamendaki">
                        <option selected>Lama Mendaki</option>
                        <option value="1 hari">1 Hari</option>
                        <option value="2 hari">2 Hari</option>
                        <option value="3 hari">3 Hari</option>
                      </select>
                    </div>
                  <div class="form-floating" style="margin-top: 30px;">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat"></textarea>
                  <label for="floatingTextarea2">Alamat</label>
                </div>
                <div class="mb-3" style="margin-top: 30px;">
                  <label for="formFile" class="form-label">Upload Foto</label>
                  <input class="form-control" type="file" id="formFile" name="foto">
                </div>
                <label class="form-check-label">Apakah Anda Menyetujui Registrasi ini?</label>
                <div class="form-check form-check-inline" style="justify-content: space-between;">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Ya" name="status">
                  <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Tidak" name="status">
                  <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                </div>
                <div>
                <input type="submit" name="submit" style="border-radius: 10px; margin-top: 10px;">
                </div>
              </form>
            </div>
          </div>
        </div>
      </form>
  </section>
  <script src="./config/main.js"></script>
</body>
</html>