
<!DOCTYPE html>
<html>
<head>
<?php include("common/head.php") ?>
</head>

<body>

<div class="page-wrapper">
 	<?php include("common/menu.php") ?>
    

		<!--Page Title-->
		<section class="page-title" style="background-image:url(images/background/1.jpg)">
    	<div class="auto-container">
        	<h1> Gallerys</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Pages</li>
				<li>Gallery</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->



	<section class="gallery-section-four">
		<div class="auto-container">
            <!--Galery-->
            <div class="sortable-masonry">
                
              
                
                <div class="items-container row clearfix">
                

					<?php 
					for($i=1;$i<45;$i++){?>


				<div class="gallery-block-three masonry-item repair all col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/th/image<?php echo $i; ?>.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="#" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/big/image<?php echo $i; ?>.jpg" data-fancybox="gallery-images-2" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>



					<?php } ?>



		</div>
	</section>
	




	
	<?php include("clients.php") ?>
	
	<?php include("common/footer.php") ?>
	
</body>
</html>