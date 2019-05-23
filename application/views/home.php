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


<body background="<?= base_url();?>/road.jpg">

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



 
 <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Kami membantu Mengira cuaca Di kota !</h1>
        </div>
        <div class="col-xl-7 mx-auto" >
          <form action="hasil" method="post">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
				
                <input type="text" class="form-control form-control-lg" placeholder="Masukan Nama Kota ..." name="no_resi">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-default btn-rounded mb-4">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>


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