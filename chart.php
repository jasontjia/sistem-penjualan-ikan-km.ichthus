<?php
 $koneksi = mysqli_connect("localhost", "root", "", "perhitungan");
 $query = "SELECT Total, count(*) as number FROM kontan GROUP BY Total";
 $result = mysqli_query($koneksi, $query);
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Presentase Pie Chart</title>
           <link rel="stylesheet" href="./assets/styles/dashboard.css">
           <link rel="stylesheet" href="./assets/styles/tabel.css">
           <script src=" https://kit.fontawesome.com/d26fe4572f.js" crossorigin="anonymous "></script>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
           <script type="text/javascript">
           google.charts.load('current', {'packages':['corechart']});
           google.charts.setOnLoadCallback(drawChart);
           function drawChart()
           {
                var data = google.visualization.arrayToDataTable([
                          ['Total', 'Number'],
                          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                               echo "['".$row["Total"]."', ".$row["number"]."],";
                          }
                          ?>
                     ]);
                var options = {
                      title: 'Presentase total pembayaran transaksi ikan',
                      //is3D:true,
                      pieHole: 0.6
                     };
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
           }
           </script>
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
           <br /><br />
           <div style="width:100%;">
                <br><br><h3 align="center">Berdasarkan total transaksi</h3></br></br>
                <br />
                <div id="piechart" style="width: 100%; padding-left: 250px; height: 400px;"></div>
           </div>
      </body>
 </html>
