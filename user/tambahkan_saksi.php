<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda E - Surat</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/CSS/style1.css" />
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

          <li>
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

          <li  class="active">
            <a href="#">
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
            <!-- Label 1 Start -->
            <h1>Tambahkan Saksi - saksi</h1>
                <h2> Saksi 1</h2>
                <div class="form-section">
                <label for="terlapor_nama">Nama</label>
                    <input type="text" id="terlapor_nama" name="terlapor_nama" required>

                    <label for="terlapor_nik">NIK</label>
                    <input type="text" id="terlapor_nik" name="terlapor_nik" required>

                    <label for="suku">SUKU</label>
                    <input type="text" id="suku" name="suku" required>

                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select id="jenis-kelamin" name="jenis-kelamin" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="indonesia">Laki - laki</option>
                        <option value="asing">Perempuan</option>
                    </select>

                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <select id="kewarganegaraan" name="kewarganegaraan" required>
                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="asing">Asing</option>
                    </select>

                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" id="tempatlahir" name="tempatlahir" required>

                    <label for="terlapor_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="terlapor_tanggal_lahir" name="terlapor_tanggal_lahir" required>

                    <label for="terlapor_pekerjaan">Pekerjaan</label>
                    <input type="text" id="terlapor_pekerjaan" name="terlapor_pekerjaan" required>

                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="kristen">Hindu</option>
                        <option value="kristen">Budha</option>
                        <option value="kristen">Konghucu</option>
                    </select>

                    <label for="terlapor_alamat">Alamat</label>
                    <input type="text" id="terlapor_alamat" name="terlapor_alamat" required>

                    <label for="terlapor_no_hp">No HP</label>
                    <input type="text" id="terlapor_no_hp" name="terlapor_no_hp" required>
                </div>
                <!-- label 1 End -->
                
            <!-- Label 2 Start -->
                <h2> Saksi 2</h2>
                <div class="form-section">
                <label for="terlapor_nama">Nama</label>
                    <input type="text" id="terlapor_nama" name="terlapor_nama" required>

                    <label for="terlapor_nik">NIK</label>
                    <input type="text" id="terlapor_nik" name="terlapor_nik" required>

                    <label for="suku">SUKU</label>
                    <input type="text" id="suku" name="suku" required>

                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select id="jenis-kelamin" name="jenis-kelamin" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="indonesia">Laki - laki</option>
                        <option value="asing">Perempuan</option>
                    </select>

                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <select id="kewarganegaraan" name="kewarganegaraan" required>
                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="asing">Asing</option>
                    </select>

                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" id="tempatlahir" name="tempatlahir" required>

                    <label for="terlapor_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="terlapor_tanggal_lahir" name="terlapor_tanggal_lahir" required>

                    <label for="terlapor_pekerjaan">Pekerjaan</label>
                    <input type="text" id="terlapor_pekerjaan" name="terlapor_pekerjaan" required>

                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="kristen">Hindu</option>
                        <option value="kristen">Budha</option>
                        <option value="kristen">Konghucu</option>
                    </select>

                    <label for="terlapor_alamat">Alamat</label>
                    <input type="text" id="terlapor_alamat" name="terlapor_alamat" required>

                    <label for="terlapor_no_hp">No HP</label>
                    <input type="text" id="terlapor_no_hp" name="terlapor_no_hp" required>
                </div>
                <!-- label 2 End -->

            <!-- Label 3 Start -->
                <h2> Saksi 3</h2>
                <div class="form-section">
                <label for="terlapor_nama">Nama</label>
                    <input type="text" id="terlapor_nama" name="terlapor_nama" required>

                    <label for="terlapor_nik">NIK</label>
                    <input type="text" id="terlapor_nik" name="terlapor_nik" required>

                    <label for="suku">SUKU</label>
                    <input type="text" id="suku" name="suku" required>

                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select id="jenis-kelamin" name="jenis-kelamin" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="indonesia">Laki - laki</option>
                        <option value="asing">Perempuan</option>
                    </select>

                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <select id="kewarganegaraan" name="kewarganegaraan" required>
                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="asing">Asing</option>
                    </select>

                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" id="tempatlahir" name="tempatlahir" required>

                    <label for="terlapor_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="terlapor_tanggal_lahir" name="terlapor_tanggal_lahir" required>

                    <label for="terlapor_pekerjaan">Pekerjaan</label>
                    <input type="text" id="terlapor_pekerjaan" name="terlapor_pekerjaan" required>

                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="kristen">Hindu</option>
                        <option value="kristen">Budha</option>
                        <option value="kristen">Konghucu</option>
                    </select>

                    <label for="terlapor_alamat">Alamat</label>
                    <input type="text" id="terlapor_alamat" name="terlapor_alamat" required>

                    <label for="terlapor_no_hp">No HP</label>
                    <input type="text" id="terlapor_no_hp" name="terlapor_no_hp" required>
                </div>
                <!-- label 3 End -->

            <!-- Label 4 Start -->
                <h2> Saksi 4</h2>
                <div class="form-section">
                <label for="terlapor_nama">Nama</label>
                    <input type="text" id="terlapor_nama" name="terlapor_nama" required>

                    <label for="terlapor_nik">NIK</label>
                    <input type="text" id="terlapor_nik" name="terlapor_nik" required>

                    <label for="suku">SUKU</label>
                    <input type="text" id="suku" name="suku" required>

                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select id="jenis-kelamin" name="jenis-kelamin" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="indonesia">Laki - laki</option>
                        <option value="asing">Perempuan</option>
                    </select>

                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <select id="kewarganegaraan" name="kewarganegaraan" required>
                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="asing">Asing</option>
                    </select>

                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" id="tempatlahir" name="tempatlahir" required>

                    <label for="terlapor_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="terlapor_tanggal_lahir" name="terlapor_tanggal_lahir" required>

                    <label for="terlapor_pekerjaan">Pekerjaan</label>
                    <input type="text" id="terlapor_pekerjaan" name="terlapor_pekerjaan" required>

                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="kristen">Hindu</option>
                        <option value="kristen">Budha</option>
                        <option value="kristen">Konghucu</option>
                    </select>

                    <label for="terlapor_alamat">Alamat</label>
                    <input type="text" id="terlapor_alamat" name="terlapor_alamat" required>

                    <label for="terlapor_no_hp">No HP</label>
                    <input type="text" id="terlapor_no_hp" name="terlapor_no_hp" required>
                </div>
                <!-- label 4 End -->

            <!-- Label 5 Start -->
                <h2> Saksi 5</h2>
                <div class="form-section">
                <label for="terlapor_nama">Nama</label>
                    <input type="text" id="terlapor_nama" name="terlapor_nama" required>

                    <label for="terlapor_nik">NIK</label>
                    <input type="text" id="terlapor_nik" name="terlapor_nik" required>

                    <label for="suku">SUKU</label>
                    <input type="text" id="suku" name="suku" required>

                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <select id="jenis-kelamin" name="jenis-kelamin" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="indonesia">Laki - laki</option>
                        <option value="asing">Perempuan</option>
                    </select>

                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <select id="kewarganegaraan" name="kewarganegaraan" required>
                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="asing">Asing</option>
                    </select>

                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" id="tempatlahir" name="tempatlahir" required>

                    <label for="terlapor_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="terlapor_tanggal_lahir" name="terlapor_tanggal_lahir" required>

                    <label for="terlapor_pekerjaan">Pekerjaan</label>
                    <input type="text" id="terlapor_pekerjaan" name="terlapor_pekerjaan" required>

                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="kristen">Hindu</option>
                        <option value="kristen">Budha</option>
                        <option value="kristen">Konghucu</option>
                    </select>

                    <label for="terlapor_alamat">Alamat</label>
                    <input type="text" id="terlapor_alamat" name="terlapor_alamat" required>

                    <label for="terlapor_no_hp">No HP</label>
                    <input type="text" id="terlapor_no_hp" name="terlapor_no_hp" required>
                </div>
                <!-- label 5 End -->
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
