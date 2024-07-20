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

          <li class="active">
            <a href="#">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title">Beranda</span>
            </a>
          </li>

          <li>
            <a href="surat_masuk.php">
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

        <!-- ======================= Cards ================== -->
        <div class="cardBox">
          <div class="card card-jumlah-surat">
            <div>
              <div class="iconBx">
                <ion-icon name="document-text-outline"></ion-icon>
              </div>
              <div class="Surat-Masuk">0</div>
              <div class="cardName">Surat Masuk</div>
            </div>
          </div>

          <div class="card card-admin-aktif">
            <div>
              <div class="iconBx">
                <ion-icon name="documents-outline"></ion-icon>
              </div>
              <div class="Surat-Keluar">0</div>
              <div class="cardName">Surat Keluar</div>
            </div>
          </div>

          <div class="card card-jumlah-lp">
            <div>
              <div class="iconBx">
                <ion-icon name="file-tray-full-outline"></ion-icon>
              </div>
              <div class="Jumlah-Lp">0</div>
              <div class="cardName">Jumlah Laporan Polisi</div>
            </div>
          </div>
        </div>

        <!-- ======================= Charts ================== -->
        <div class="chartBox">
          <div class="chart">
            <h3>PERSENTASE SURAT</h3>
            <div class="percentage">10%</div>
            <canvas id="chartSurat"></canvas>
          </div>

          <div class="chart">
            <h3>PERSENTASE LP</h3>
            <div class="percentage">0.5%</div>
            <canvas id="chartLp"></canvas>
          </div>
        </div>

        <!-- ================ Surat/LP Details List ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Surat/LP Terbaru</h2>
            <div class="searchBox">
                <input type="text" placeholder="Cari Surat Anda...">
                <button type="button">Search</button>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <td>NO</td>
                    <td>NOMOR SURAT/LP</td>
                    <td>NAMA SURAT/LP</td>
                    <td>PERIHAL</td>
                    <td>Tanggal Surat</td>
                    <td>Aksi</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>LP/../../2024/RES/.</td>
                    <td>LAPORAN POLISI</td>
                    <td>----------</td>
                    <td>dd/mm/yyyy</td>
                    <td>
                        <a href="#" class="action lihat">Lihat</a>
                        <a href="#" class="action edit">Edit</a>
                        <a href="#" class="action hapus">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>LP/../../2024/RES/.</td>
                    <td>LAPORAN POLISI</td>
                    <td>----------</td>
                    <td>dd/mm/yyyy</td>
                    <td>
                        <a href="#" class="action lihat">Lihat</a>
                        <a href="#" class="action edit">Edit</a>
                        <a href="#" class="action hapus">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LP/../../2024/RES/.</td>
                    <td>LAPORAN POLISI</td>
                    <td>----------</td>
                    <td>dd/mm/yyyy</td>
                    <td>
                        <a href="#" class="action lihat">Lihat</a>
                        <a href="#" class="action edit">Edit</a>
                        <a href="#" class="action hapus">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>LP/../../2024/RES/.</td>
                    <td>LAPORAN POLISI</td>
                    <td>----------</td>
                    <td>dd/mm/yyyy</td>
                    <td>
                        <a href="#" class="action lihat">Lihat</a>
                        <a href="#" class="action edit">Edit</a>
                        <a href="#" class="action hapus">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>LP/../../2024/RES/.</td>
                    <td>LAPORAN POLISI</td>
                    <td>----------</td>
                    <td>dd/mm/yyyy</td>
                    <td>
                        <a href="#" class="action lihat">Lihat</a>
                        <a href="#" class="action edit">Edit</a>
                        <a href="#" class="action hapus">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

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
