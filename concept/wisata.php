<!DOCTYPE HTML>
<!--
	Concept by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Concept &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        top:  10px;

        height: 300px;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #ffff;
        padding: 5px;
        border: 1px solid #9999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #latlng {
        
      }
    </style>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="fh5co-loader"></div>
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 text-left">
					<div id="fh5co-logo"><a href="index.php">OsingGo</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li style="margin-bottom: 20px"><a href="wisata.php">Wisata</a></li>
						<li style="margin-bottom: 20px" ><a href="services.php">Pusat Oleh-oleh</a>
						</li>

						<li style="margin-bottom: 20px"><a href="products.php">Bank Sampah</a></li>
						<li><a href="about.php">Tentang</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header  class="fh5co-cover col-md-12" role="banner" style="background-image:url(images/wisata.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30" style="color: #2c3e50;">Temukan Wisata</h1>
						</div>
				</div>

				
			</div>
		</div>
	</header>
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="box box-default">
				
				<label style="color: black; font-size: 23px">Rekomendasi Wisata</label><hr>
			
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          	<div>
          	<div class="col-md-3 animate-box" data-animate-effect="fadeIn"><!--Kategori-->
					<div class="fh5co-staff"><a href="">
						<img src="images/person1.jpg" >
						<h3>Wisata Air</h3></a>
					</div>
				</div>
				<div class="col-md-3 animate-box" data-animate-effect="fadeIn"><!--Kategori-->
					<div class="fh5co-staff">
						<img src="images/person1.jpg" >
						<h3>Taman</h3>
					</div>
				</div>
				<div class="col-md-3 animate-box" data-animate-effect="fadeIn"><!--Kategori-->
					<div class="fh5co-staff"><a href="">
						<img src="images/person1.jpg" >
						<h3>Pegunungan</h3></a>
					</div>
				</div>
				<div class="col-md-3 animate-box" data-animate-effect="fadeIn"><!--Kategori-->
					<div class="fh5co-staff"><a href="">
						<img src="images/person1.jpg" >
						<h3>Wisata Kuliner</h3></a>
					</div>
				</div>
				</div><br>

		<div class="col-md-12">
				<label style="color: black; font-size: 23px">Cek Lokasi Anda</label><hr> 
				<p id="tampilkan"></p>
				<button class="btn btn-info pull-left" onclick="getLocation()">Cek dah!</button><br><br>
				<div id="mapcanvas" ></div>
		</div><br><br>

            <div class="col-md-12" style="margin-top: 20px">
              <div class="form-group">
                <label style="color: black;font-size: 23px">Pilih Lokasi Tujuan </label><br><hr>
              </div>
            </div>
            <div class="col-md-2">

            </div>

          
<?php
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin" style="color: #000000">
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="30%">Nama Perusahaan</th>
                  <th width="10%">Kategori</th>
                  <th width="13%">Kota</th>
                  <th width="20%">Website</th>
                  <th width="27%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('http://localhost/osing-go/concept/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nama_perusahaan; ?></td>
                <td><?php echo $item->kategori; ?></td>
                <td><?php echo $item->kota; ?></td>
                <td><?php echo $item->website; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="_blank" href="../detail.php?id=<?php echo $item->id_perusahaan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
          </div>
        </div>
      </div>
		</div>
	</div>
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Let's work together</span>
					<h2>Try this template for free</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p><button type="submit" class="btn btn-default">Get In Touch</button></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
					<h3>Concept.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkE6oJvsyX4sRAw0QTt3R_gJClY0NtIFQ&libraries=places&callback=initMap"
        async defer></script>
<script>
var view = document.getElementById("tampilkan");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
    }
}
 
function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon)
    mapcanvas = document.getElementById('mapcanvas')
    mapcanvas.style.height = '500px';
    mapcanvas.style.width = '100%';
 
    var myOptions = {
    center:latlon,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    }
     
    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    var marker = new google.maps.Marker({
        position:latlon,
        map:map,
        title:"You are here!"
    });
    window.onload=document.getElementById("lok");
   var element_kasi=document.getElementById("lok");
   element_kasi.value =lat+','+ lon; 
}
 
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
            break;
        case error.POSITION_UNAVAILABLE:
            view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
            break;
        case error.TIMEOUT:
            view.innerHTML = "Requestnya timeout bro"
            break;
        case error.UNKNOWN_ERROR:
            view.innerHTML = "An unknown error occurred."
            break;
    }
 }
</script> 
	</body>
</html>

