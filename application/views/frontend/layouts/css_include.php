<?php
/**
 * Created by css.
 * User: Gourav
 * Date: 27/06/2017
 */
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<!--// bootstrap-css -->
<link href="<?php echo base_url(); ?>assets/layouts/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/style.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/font-awesome.css" type="text/css">

<!--// css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/flexslider.css" type="text/css" media="screen" property="" />

<!-- font-awesome icons -->

<link href="<?php echo base_url(); ?>assets/layouts/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/owl.carousel.css" type="text/css" media="all">

<link href="<?php echo base_url(); ?>assets/layouts/css/owl.theme.css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/cm-overlay.css" />

    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/layouts/css/font.css" />

    
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://www.myfonts.com/fonts/linotype/rage-italic/" rel="stylesheet">    

<!-- //font -->
<script src="<?php echo base_url(); ?>assets/layouts/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/layouts/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
