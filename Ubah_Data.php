<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah</title>
    <link rel="stylesheet" href="./assets/styles/tabel.css">
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
        <a href="Transaksi_Penjualan.php"><i class="fas fa-store-alt"></i><span>Transaksi Penjualan</span></a>
        <a href="Lihat_Transaksi.php"><i class="fa-solid fa-eye"></i><span>View Transaksi</span></a>
        <a href="change-password.php"><i class="fas fa-key"></i><span>Ganti Password</span></a>
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->
    <div class="content">
        <div class="card">
    <?php
        include "connect.php"; //Fungsi Ubah Data
        $Customer = $_GET['Customer'];
        $data = mysqli_query($koneksi,"select * from kontan where Customer='$Customer'");
        $d = mysqli_fetch_array($data)
    ?>
    <center>
	    <img src="./assets/images/km.ichthus.png" alt="" width="60" height="60">
	    </center>
    <h2 <p align="center"> Form Ubah Transaksi Penjualan Ikan KM.ICHTHUS </h2>

    <form action="" method="post">
    <table border="1" align="center">
    <tr>
        <th width="250"> Customer </th>
        <th> <input type="text" name="Customer" value="<?php echo $d[0]; ?>"> </th>
    </tr>
    <tr>
        <th> Jenis Pembayaran </th>
        <th> <input type="text" name="Jenis_Pembayaran" value="<?php echo $d[1]; ?>"> </th>
    </tr>
    <tr>
        <th> Kode Transaksi </th>
        <th> <input type="text" name="Kode_Transaksi" value="<?php echo $d[2]; ?>"> </th>
    </tr>
    <tr>
        <th> Tanggal Transaksi </th>
        <td> <input type="date" name="Tanggal_Transaksi" value="<?php echo $d[3]; ?>"> </td>
    </tr>
    <tr>
        <th> Kode Ikan </th>
        <th> <input type="text" name="Kode_Ikan" value="<?php echo $d[4]; ?>"> </th>
    </tr>
    <tr>
        <th> Jenis Ikan </th>
        <td> <input type="text" name="Jenis_Ikan" value="<?php echo $d[5]; ?>"> </td>
    </tr>
    <tr>
        <th> Jumlah Ikan </th>
        <td> <input type="number" name="Jumlah_Ikan" value="<?php echo $d[6]; ?>"> </td>
    </tr>
    <tr>
        <th> DOS </th>
        <td> <input type="text" name="DOS" id="DOS" value="<?php echo $d[7]; ?>"> </td>
    </tr>
    <tr>
        <th> Berat Ikan </th>
        <td> <input type="text" name="Berat_Ikan" id="Berat_Ikan" value="<?php echo $d[8]; ?>"> </td>
    </tr>
    <tr>
        <th> Harga </th>
        <td> <input type="text" name="Harga" id="Harga" value="<?php echo $d[9]; ?>"> </td>
    </tr>
    <tr>
        <th> Total </th>
        <td> <input type="text" name="Total" id="Total" value="<?php echo $d[10]; ?>"> </td>
    </tr>
    <tr>
        <th> Action </th>
        <th><input type="submit" name="proses" value="Ubah"></th>  
    </tr>
</table>
</form>

<p align="center" style="font-weight:bold;font-size:14pt"></p>
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
    <input type="button" value="+Tambahkan" onclick="window.open('Transaksi_Penjualan.php', '_blank')">
    </p>


<?php
include "connect.php";   //Fungsi Ubah Data

if(isset($_POST['proses'])){
mysqli_query($koneksi, "update kontan set 
Jenis_Pembayaran = '$_POST[Jenis_Pembayaran]',
Kode_Transaksi = '$_POST[Kode_Transaksi]',
Tanggal_Transaksi = '$_POST[Tanggal_Transaksi]',
Kode_Ikan = '$_POST[Kode_Ikan]',
Jenis_Ikan = '$_POST[Jenis_Ikan]',
Jumlah_Ikan = '$_POST[Jumlah_Ikan]',
DOS = '$_POST[DOS]',
Berat_Ikan = '$_POST[Berat_Ikan]',
Harga = '$_POST[Harga]',
Total = '$_POST[Total]'
where Customer = '$_POST[Customer]'");
    echo "Data barang telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='Transaksi_Penjualan.php'>";

}

?>

<script type="text/javascript"> //Logika Perhitungan berat ikan dan Total Harga yg dibayar
 $("#DOS").keyup(function(){   
   var DOS = parseFloat($("#DOS").val());
   var Berat_Ikan = DOS*10;
   $("#Berat_Ikan").attr("Value",Berat_Ikan);
 });
</script>

<script type="text/javascript"> 
 $("#Harga").keyup(function(){   
   var DOS = parseFloat($("#DOS").val());
   var Harga = parseFloat($("#Harga").val());
   var Total = DOS*Harga;
   $("#Total").attr("Value",Total);
 });
</script>
        </div>
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