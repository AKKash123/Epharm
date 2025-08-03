<!DOCTYPE html>
<html lang="en">
<?php
$title=" you Lost us";
include'header.php';
?>
<body>
<br>
<br>
<style>
	
/*======================
    404 page
=======================*/
:root {
 
  --color-primary: #ce1212;
}

.page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
	margin-top: 22px;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{			 
		color: #fff!important;
    padding: 10px 20px;
    background: var(--color-primary);
    border-radius: 50px;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
</style>
<section class="page_404">
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
			<h1 class="text-center ">404</h1>
		
		
		</div>
		
		<div class="contant_box_404">
		<h3 class="h2">
		Look like you're lost
		</h3>
		
		<p>the page you are looking for not avaible!</p>
		
		<a href="index.php" class="link_404 btn-book-a-table">Go to Pharmacy</a>
	</div>
		</div>
		</div>
		</div>
	</div>
</section>
<div id="preloader"></div>
<?php include 'footer.php'?>
<!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>