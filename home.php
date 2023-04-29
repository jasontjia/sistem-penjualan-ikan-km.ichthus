<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Menu Utama</title>
    <link rel="stylesheet" href="./assets/styles/dashboard.css">
    <link rel="stylesheet" href="./assets/styles/tabel.css">
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
        <a href="presentase.php"><i class="fa-solid fa-eye"></i><span>Presentase</span></a>
        <a href="change-password.php"><i class="fas fa-key"></i><span>Ganti Password</span></a>
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->
    <div class="content">
        <div class="card">
        <center>
	    <img src="./assets/images/km.ichthus.png" alt="" width="60" height="60">
	    </center>
        <p align="center" style="font-weight:bold;font-size:18pt">Daftar Transaksi Penjualan Ikan KM.ICHTHUS</p>
        <center>
            <label for="cari">Search</label>
            <form method="get" action="">
                <input type="text" name="cari">
            </form>
            </br>
    <table border="1">
    <tr>
        <th width="50">No</th>
        <th width="160">Tanggal Transaksi</th>
        <th width= "150">Kode Transaksi</th>
        <th width= "150">Customer</th>
        <th width= "130">Total(RP)</th>
        <th colspan="2">Aksi</th>
    </tr>
    </center>

    <?php
    include "connect.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from kontan");
    if (isset($_GET['cari'])){    //Fungsi Pencarian Berdasarkan Customer
        $ambildata = mysqli_query($koneksi,"select * from kontan WHERE Customer LIKE '%". $_GET['cari']."%'");
    }
    while($tampil = mysqli_fetch_array($ambildata)){    //Tampil Data Inputan
        $warna = ($no%2==1)?"white":"#eee";
        echo "
        <tr bgcolor='$warna'>
            <td>$no</td>
            <td>$tampil[Tanggal_Transaksi]</td>
            <td>$tampil[Kode_Transaksi]</td>
            <td>$tampil[Customer]</td>
            <td>$tampil[Total]</td>
            <td><a href='Lihat_Transaksi.php'> Lihat </a></td>
            <td><a href='Ubah_Data.php?Customer=$tampil[Customer]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>
    <p align="center">
    <input type="button" value="+Tambahkan" onclick="window.open('Transaksi_Penjualan.php', '_blank')">
    </p>
    <p align="center">
    </p>
        </div>
        <div>
        </div>
    </div>

</body>

</html>
