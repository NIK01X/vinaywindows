
<!DOCTYPE html>
<html>
<head>
<?php include("common/head.php") ?>

<style>
.social-icon-one li a{border: 1px solid rgb(193 193 193) !important;}    
</style>
</head>

<body>

<div class="page-wrapper">
 	<?php include("common/menu.php") ?>
    

		<!--Page Title-->
		<section class="page-title" style="background-image:url(images/background/1.jpg)">
    	<div class="auto-container">
        	<h1> Our Products</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Pages</li>
				<li>Products</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

<!--Office Section-->
<section class="office-section">
		<div class="auto-container">
			<div class="inner-container">
				<!--Title Box-->
				<div class="title-box">
					<h2>Corporate Office</h2>
				</div>
				<div class="row clearfix">
					
					<!--Office Block-->
					<div class="office-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-place"></span>
							</div>
							<h3>Mailing Address</h3>
							<div class="text"><b>Vinay Windows System Pvt. Ltd.</b><br>
RTC 68, Rabale MIDC Rd, Sector 8,<br> MIDC Industrial Area, Rabale, <br>Navi Mumbai, Maharashtra 400701.</div>
						<!--	<a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span>&nbsp; View On Map</a>-->
						</div>
					</div>
					
					<!--Office Block-->
					<div class="office-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span>
							</div>
							<h3>24/7 Quick Contact</h3>
							<div class="text">+91 9867236124 <br> info@vinaywindows.com<br>www.vinaywindows.com</div>
							<a class="link-btn" href="#"><span class="arrow flaticon-right-arrow-2"></span>&nbsp; Make Appointment</a>
						</div>
					</div>
					
					<!--Office Block-->
					<div class="office-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon flaticon-question"></span>
							</div>
							<h3>Get Social</h3>
						
							<ul class="social-icon-one">
								<li><a href="https://www.facebook.com/mmupvcwindows/"><span class="icon fa fa-facebook"></span>facebook</a></li>
								<li><a href="https://www.instagram.com/mm_windows/"><span class="icon fa fa-instagram"></span>Instagram +</a></li>
						
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--End Office Section-->
	
	<!--Fullwidth Map Section-->
	<section class="fullwidth-map-section2">
		<div class="outer-container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.200228182546!2d73.01322987570092!3d19.14271074987398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf538fffffff%3A0x92797eab727fa28d!2sM%20V%20Furniture%20Works!5e0!3m2!1sen!2sin!4v1688569215889!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<!--End Fullwidth Map Section-->
	
	<!--Contact Form Section-->
	<section class="contact-form-section" style="background-image: url(images/background/3.png)">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!--Title Column-->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>For Enquiries,</h3>
						<h2>Just Say Hello.</h2>
						<div class="text">For questions or concerns please contact us via telephone or simply complete the contact form and one of our knowledgeable representatives will respond in a timely manner.</div>
					</div>
				</div>
				
				<!--Form Column-->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Contact Form-->
						<div class="contact-form">

							<form method="post" action="common/aiir_form.php" id="contact-form">
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="aiirname" value="" placeholder="Name" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="aiiremail" value="" placeholder="Email" required>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="aiirmessage" placeholder="Message..."></textarea>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="theme-btn btn-style-four"><span class="arrow flaticon-right-arrow-4"></span>Submit Now</button>
                                    </div>
								</div>
							</form>

						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Contact Form Section-->
	
	<?php include("common/footer.php") ?>

</body>
</html>