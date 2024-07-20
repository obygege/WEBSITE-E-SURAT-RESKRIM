<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda E - Surat</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/CSS/styles.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </head>

  <body>
    <!-- =============== Navigation ================ -->
    <div class="container">
      <div class="navigation">
        <ul>
          <li class="head-icon">
            <a href="#">
              <span class="icon">
                <img src="assets/IMG/RESKRIM.png" alt="" />
              </span>
              <span class="title">E - SURAT</span>
            </a>
          </li>

          <li>
            <a href="dashboard.php">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title">Beranda</span>
            </a>
          </li>

          <li  class="active">
            <a href="#">
              <span class="icon">
                <ion-icon name="document-text-outline"></ion-icon>
              </span>
              <span class="title">Surat Masuk</span>
            </a>
          </li>

          <li>
            <a href="surat_keluar.php">
              <span class="icon">
                <ion-icon name="documents-outline"></ion-icon>
              </span>
              <span class="title">Surat Keluar</span>
            </a>
          </li>

          <li>
            <a href="laporan_polisi.php">
              <span class="icon">
                <ion-icon name="file-tray-full-outline"></ion-icon>
              </span>
              <span class="title">Laporan Polisi</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
              </span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>

            <!-- ========================= Main ==================== -->
            <div class="main">
        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>

          <div class="nama-user">
            Nama User
          </div>
          <div class="user">
            <img src="assets/IMG/RESKRIM.png" alt="" />
          </div>
        </div>

        <!-- =========== Isi ============ -->
        <h1>Surat Masuk</h1>
        <form action="submit-surat.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomor-surat">Nomor Surat</label>
                <input type="text" id="nomor-surat" name="nomor_surat" required>
            </div>
            <div class="form-group">
                <label for="tanggal-surat">Tanggal Surat</label>
                <input type="date" id="tanggal-surat" name="tanggal_surat" required>
            </div>
            <div class="form-group">
                <label for="perihal">Perihal</label>
                <input type="text" id="perihal" name="perihal" required>
            </div>
            <div class="form-group">
                <label for="dari">Dari</label>
                <select id="kepada" name="kepada" required>
                    <option value="" disabled selected>Pilih Unit</option>
                    <option value="Unit PPA">Unit PPA</option>
                    <option value="Unit Pidum">Unit Pidum</option>
                    <option value="Unit Pidsus">Unit Pidsus</option>
                    <option value="Unit Pidkor">Unit Pidkor</option>
                    <option value="Unit Pidkor">Urmin Reskrim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kepada">Kepada</label>
                <select id="kepada" name="kepada" required>
                    <option value="" disabled selected>Pilih Unit</option>
                    <option value="Unit PPA">Unit PPA</option>
                    <option value="Unit Pidum">Unit Pidum</option>
                    <option value="Unit Pidsus">Unit Pidsus</option>
                    <option value="Unit Pidkor">Unit Pidkor</option>
                    <option value="Unit Pidkor">Urmin Reskrim</option>
                </select>
            </div>
            <div class="form-group file-upload">
                <label for="file-upload" class="upload-button">Upload File</label>
                <input type="file" id="file-upload" name="file_upload" required>
                <span>Batas Max 2MB</span>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-button">Submit</button>
            </div>
        </form>
        <!-- =========== Isi End =========== -->


        <!-- End -->
        <!-- =========== Footer =========== -->
<footer class="footer">
    <div class="footer-content">
        <img src="assets/IMG/RESKRIM.png" alt="Logo" class="footer-logo">
        <span>TIM IT SATRESKRIM POLRES MUBA | COPYRIGHT 2024</span>
    </div>
</footer>
      </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/JS/script.js"></script>

    <!-- ====== ionicons ======= -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
