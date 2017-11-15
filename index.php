<?php 
	include 'ricky/conf.php'; 
	include 'ricky/fn.php'; 
?>

<!doctype html>
<html lang="en">
  	<head>
    	
    	<?php 
    		global_head();
    		loadcss(array('bootstrap', 'fontawesome','owlcarousel','style')); 
    	?>

  	</head>
<body>

	<?php 
		include 'layout/most-top.php';
		include 'layout/banner.php';
		include 'layout/main-navbar.php'; 
		include 'layout/ricky-slider.php'; 
		include 'layout/4points.php'; 
		include 'layout/postingan.php'; 
		include 'layout/agenda.php'; 
		include 'layout/mitra.php'; 
		include 'layout/model.php'; 
		include 'layout/form.php'; 
		include 'layout/video.php'; 
		include 'layout/aplikasi.php'; 
		include 'layout/galeri.php'; 
		include 'layout/footer.php'; 


		loadjs(array('jquery','popper','owlcarousel','bootstrap')); 
	 ?>

<script>

$(document).ready(function(){
  	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    responsiveClass:true,
	    navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:5,
	            nav:true,
	            loop:false
	        }
	    }
	})
});

</script>

     
</body>
</html>