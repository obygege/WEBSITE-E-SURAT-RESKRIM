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
            <h1>Arsip Laporan Polisi</h1>
            <form action="path/to/your/submit.php" method="POST">
                <div class="form-section">
                    <!-- Head LP -->
                    <label for="nomor_laporan">Nomor Laporan Polisi</label>
                    <input type="text" id="nomor_laporan" name="nomor_laporan" required>

                    <label for="tanggal_laporan">Tanggal Laporan Polisi</label>
                    <input type="date" id="tanggal_laporan" name="tanggal_laporan" required>
                    <!-- Head LP End -->
                </div>

                <h2>Pelapor</h2>
                <div class="form-section">
                    <!-- Label 1 Start -->
                    <label for="pelapor_nama">Nama</label>
                    <input type="text" id="pelapor_nama" name="pelapor_nama" required>

                    <label for="pelapor_nik">NIK</label>
                    <input type="text" id="pelapor_nik" name="pelapor_nik" required>

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

                    <label for="pelapor_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="pelapor_tanggal_lahir" name="pelapor_tanggal_lahir" required>

                    <label for="pelapor_pekerjaan">Pekerjaan</label>
                    <input type="text" id="pelapor_pekerjaan" name="pelapor_pekerjaan" required>

                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="kristen">Hindu</option>
                        <option value="kristen">Budha</option>
                        <option value="kristen">Konghucu</option>
                    </select>

                    <label for="pelapor_alamat">Alamat</label>
                    <input type="text" id="pelapor_alamat" name="pelapor_alamat" required>

                    <label for="pelapor_no_hp">No HP</label>
                    <input type="text" id="pelapor_no_hp" name="pelapor_no_hp" required>
                    <!-- Label 1 End -->
                </div>

                <h2>Korban</h2>
                <!-- Label 2 Start -->
                <div class="form-section">
                <label for="korban_nama">Nama</label>
                    <input type="text" id="korban_nama" name="korban_nama" required>

                    <label for="korban_nik">NIK</label>
                    <input type="text" id="korban_nik" name="korban_nik" required>

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

                    <label for="korban_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="korban_tanggal_lahir" name="korban_tanggal_lahir" required>

                    <label for="korban_pekerjaan">Pekerjaan</label>
                    <input type="text" id="korban_pekerjaan" name="korban_pekerjaan" required>

                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" required>
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="kristen">Hindu</option>
                        <option value="kristen">Budha</option>
                        <option value="kristen">Konghucu</option>
                    </select>

                    <label for="korban_alamat">Alamat</label>
                    <input type="text" id="korban_alamat" name="korban_alamat" required>

                    <label for="korban_no_hp">No HP</label>
                    <input type="text" id="korban_no_hp" name="korban_no_hp" required>
                    <!-- Label 2 End -->
                    </div>

                <h2>Terlapor</h2>
                <!-- Label 3 Start -->
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

                <h2>Saksi - saksi</h2>
                <!-- Label 4 Start -->
                <div id="saksi-container" style="text-align: center;">
                <a id="saksi-link" href="tambahkan_saksi.php" class="submit-button" style="
                    display: inline-block;
                    padding: 10px 20px;
                    background-image: linear-gradient(#24ff00, #1dd700);
                    color: #ffffff;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                    font-weight: bold;
                    text-transform: uppercase;
                    text-decoration: none;
                    text-align: center;
                ">Tambahkan Saksi - saksi</a>
                </div>

                <!-- label 4 End -->

                <!-- Label 5 Start -->
                <h2>Lanjutan</h2>
                <div class="form-section">
                    <label for="tkp">TKP</label>
                    <input type="text" id="tkp" name="tkp" required>

                    <label for="tanggal_kejadian">Tanggal Kejadian</label>
                    <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" required>

                    <label for="tindak_pidana">Tindak Pidana</label>
                    <select id="tindak_pidana" name="tindak_pidana" required>
                        <option value="">Pilih Tindak Pidana</option>
                    </select>

                    <label for="barang_bukti">Barang Bukti</label>
                    <select id="barang_bukti" name="barang_bukti" required>
                        <option value="">Pilih Barang Bukti</option>
                        <!-- Tambahkan opsi sesuai kebutuhan -->
                    </select>

                    <label for="nama_saksi">Nama Saksi</label>
                    <input type="text" id="nama_saksi" name="nama_saksi" required>

                    <label for="alamat_saksi">Alamat Saksi</label>
                    <input type="text" id="alamat_saksi" name="alamat_saksi" required>

                    <label for="uraian_singkat">Uraian Singkat</label>
                    <textarea id="uraian_singkat" name="uraian_singkat" required></textarea>

                    <label for="tindakan_yang_dilakukan">Tindakan Yang Dilakukan</label>
                    <select id="tindakan_yang_dilakukan" name="tindakan_yang_dilakukan" required>
                        <option value="">Pilih Tindakan</option>
                        <!-- Tambahkan opsi sesuai kebutuhan -->
                    </select>
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
