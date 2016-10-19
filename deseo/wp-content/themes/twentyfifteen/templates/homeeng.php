<?php /* Template Name: homeeng */ ?>

	<!DOCTYPE html>

<html class="nojs html css_verticalspacer" lang="en-US">

 <!-- BC_OBNW -->
<head>
<title>ARCHER</title>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<meta name="image-hide-from-external-url" content="true" />
<meta name="image-hide-location" content="true" />
<meta name="generator" content="2015.2.1.352" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "archer.css"], "outOfDate":[]};
</script>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/site_global-crc=4162728713.css" />
<link rel="stylesheet" type="text/css" href="css/archer-crc=278933197.css" id="pagesheet" />
<!-- Other scripts -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

body{
	background:url("<?php echo get_stylesheet_directory_uri(); ?>/images/circles.jpg");
	background-size: cover;
}
.squarees{
	position:absolute;
	bottom:150px;
	width:200px;
	height: 50px;
	border: solid 1px #a5cec0;
	left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto; 
  text-align: center;
  font-size: 20px;
  color:#a5cec0;
  padding-top: 10px;
  background-color: white;
}
.squareen{
	position:absolute;
	bottom:80px;
	width:200px;
	height: 50px;
	border: solid 1px #a5cec0;
	left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto; 
  text-align: center;
  font-size: 20px;
  color:#a5cec0;
  padding-top: 10px;
  background-color: white;
}
.squarees:hover{
	background-color: #a5cec0;
	color:white;
	cursor: pointer;
}
.squareen:hover{
	background-color: #a5cec0;
	color:white;
	cursor: pointer;
}
.sq1{
	width:100px;
	height:100px;
	border: solid 1px #a5cec0;
	position: relative;
	background-size: cover;
	margin:20px;
	float:left;
}
.sq1:hover{
	border: solid 3px #a5cec0;
	cursor: pointer;
}
.sq1:hover .sqtit { 
	/*background-color: #a5cec0;*/
}
.sqtit{
	position: absolute;
	bottom:0px;
/*	height:30px;
*/	width:100%;
	background-color: white;
}
</style>


<body>
<nav class="navbar navbar-default">
  <div class="container-fluid" style="height: 65px !important;">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url(); ?>">
        <img alt="Brand" src="http://www.desirelove.info/images/amor%20y%20deseo%20logo%20alta%20res.jpg?crc=4090970282" height="180%">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a style="colorr:#52DBAA;" href="#">Arquetipos <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">Conceptos <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">Animación <span class="sr-only">(current)</span></a></li>

      </ul>
    </div>
  </div>
</nav>
	<div class="container">
		<div class="row">
		    <div class="col-sm-12" style="text-align: center;">
		      
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/amordeseo.jpg">
						<br>
						
						
			    
		    </div>
		    <div class="col-sm-12" style="text-align: center;">
		      
				
				<?php
					$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

					foreach( $mypages as $page ) {		
						$title = $page->post_title;
						$url=get_permalink( $page->ID );
						$img=wp_get_attachment_url( get_post_thumbnail_id( $page->ID ) );//get_the_post_thumbnail( $page->ID, 'full' );

					?>
					<a href="<?echo $url?>">
					<div class="sq1 " style="background:url(<?php echo $img ?>);background-size: cover; ">
						<div class="sqtit"><?php echo $page->post_title; ?></div>
					</div>
					</a>
					<?php
					}	
				?>
						
						
			    
		    </div>
		   
		    
		</div>
		
	</div>
	
 

 

 

   
</body>
</html>
<!-- Localized -->


