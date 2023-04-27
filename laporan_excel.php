<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-excel.xls"); 

?>
<p align="center" style="font-weight:bold;font-size:14pt">Laporan Transaksi Penjualan Ikan KM.ICHTHUS</p>
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