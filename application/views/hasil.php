<?php  
 $sumber = 'http://papaside.com/data.php';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo " ".count($data)." ";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <link rel="stylesheet" href="<?= base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url();?>assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url();?>assets/css/style.min.css" rel="stylesheet">


<body >

<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark default-color">
	
  <a class="navbar-brand text-left" href="#">Cuaca</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

</nav>
<!--/.Navbar -->
<div class="container py-5" style= "margin-top : 90px; margin-bottom: 160px;">




    <div class="row">
      <div class="col-lg-12 col-md-6">
        
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>no</th>
              <th>Kota</th>
             <th>Siang</th>
             <th>malam</th>
             <th>dini hari</th>
             <th>suhu</th>
             <th>kelembapan</th>
             
            </tr>
            <tr>
              <?php   
           for($a=1; $a < count($data); $a++)
           {
            print "<tr>";
            // penomeran otomatis
            print "<td>".$a."</td>";
            // menayangkan 
            print "<td>".$data[$a]['Kota']."</td>";
            print "<td>".$data[$a]['siang']."</td>";
            print "<td>".$data[$a]['malam']."</td>";
            print "<td>".$data[$a]['dini_hari']."</td>";
            print "<td>".$data[$a]['suhu']."</td>";
            print "<td>".$data[$a]['Kelembapan']."</td>";
            print "</tr>";
           }
          ?>
            </tr>
              
            <tr>
              <th></th>
              <td><a class="btn btn-default btn-rounded mb-4 float-right" href="<?= base_url('welcome')?>" role="button">Back</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>



 
 


</div>




<footer>
<footer  class="page-footer  dark default-color mt-4">
<div class="container">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><?= date('Y'); ?> &copy; Copyright: Koperasi PeTIK
  </div>
  <!-- Copyright -->
</div>
</footer>
</footer>
<!-- Footer -->





<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 <!--  <--- Bootstrap tooltips --> 
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>