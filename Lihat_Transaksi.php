<!DOCTYPE html>
<link rel="stylesheet" href="./assets/styles/tabel.css">
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Transaksi</title>
    <link rel="stylesheet" href="./assets/styles/dashboard.css">
    <script src=" https://kit.fontawesome.com/d26fe4572f.js" crossorigin="anonymous "></script>
</head>

<body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
        <label for="check">
        <i class="fas fa-bars" id="sidebar_btn" style="display: none;"></i>
      </label>
        <div class="left_area">
            <h3>KM<span>ICHTHUS</span></h3>
        </div>
    </header>
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <img src="./assets/images/km.ichthus.png" class="profile_image" alt="">
            <h4>Admin KM.ICHTHUS</h4>
        </div>
        <a href="home.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="Transaksi_Penjualan.php"><i class="fa-solid fa-cash-register"></i><span>Transaksi Penjualan</span></a>
        <a href="Lihat_Transaksi.php"><i class="fa-solid fa-eye"></i><span>View Transaksi</span></a>
        <a href="chart.php"><i class="fa-solid fa-eye"></i><span>Presentase</span></a>
        <a href="change-password.php"><i class="fas fa-key"></i><span>Ganti Password</span></a>
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->
    <div class="content">
        <div class="card">
        <center>
	    <img src="./assets/images/km.ichthus.png" alt="" width="60" height="60">
	    </center>
    <p align="center" style="font-weight:bold;font-size:18pt">Laporan Transaksi Penjualan Ikan KM.ICHTHUS</p>
    <table border="1">
    <tr>
    <th width="50">No</th>
        <th width="120">Customer</th>
        <th width= "130">Jenis Pembayaran</th>
        <th width= "100">Kode Transaksi</th>
        <th width= "150">Tanggal Transaksi</th>
        <th width= "130">Kode Ikan</th>
        <th width= "130">Jenis Ikan</th>
        <th width= "130">Jumlah Ikan (EKOR)</th>
        <th width="100">DOS</th>
        <th width= "100">Berat Ikan (KG)</th>
        <th width= "150">Harga</th>
        <th width= "200">Total (RP)</th>
    </tr>
    <?php
    include "connect.php"; //Tampil Data Inputan

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from kontan");
    while($tampil = mysqli_fetch_array($ambildata)){
        $warna = ($no%2==1)?"white":"#eee";
        echo "
        <tr bgcolor='$warna'>
        <td>$no</td>
        <td>$tampil[Customer]</td>
        <td>$tampil[Jenis_Pembayaran]</td>
        <td>$tampil[Kode_Transaksi]</td>
        <td>$tampil[Tanggal_Transaksi]</td>
        <td>$tampil[Kode_Ikan]</td>
        <td>$tampil[Jenis_Ikan]</td>
        <td>$tampil[Jumlah_Ikan]</td>
        <td>$tampil[DOS]</td>
        <td>$tampil[Berat_Ikan]</td>
        <td>$tampil[Harga]</td>
        <td>$tampil[Total]</td>
        <tr>";
        $no++;
    }
    ?>
    </table>
    <p align="center">
    <input type="button" value="Export Excel" onclick="window.open('laporan_excel.php')">
    </p>
        </div>
        <div>
            <p></p>
        </div>
        <div>
            <p></p>
        </div>
    </div>

</body>

</html>
