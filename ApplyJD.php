
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
        	<h1> Upload Resumes</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Pages</li>
				<li>Careers</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->












<!--Office Section-->
<section class="office-section" style="padding-top:1px">


		<div class="auto-container">
			<div class="inner-container">
				<!--Title Box-->
				<div class="title-box">
					<h2>Applying for <?php  if(isset($_GET['Jobapply'])){echo $_GET['Jobapply'];}else{ echo "in General";}  ?></h2>
				</div>
				
				<div class="row clearfix">
				
				<!--Accordian Column-->
				<div class="accordian-column col-lg-12">
					<div class="inner-column">

						<div class="contact-form">

							<form method="post" id="formsubmitre" action="" method="" class="hsform1"   enctype="multipart/form-data">
								<div class="row clearfix">
									<div class="form-group col-lg-12 col-md-6 col-sm-12">
										<input type="text" name="your-name" value="" placeholder="Name" required="">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="your-email" value="" placeholder="Email" required="">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="your-number" value="" placeholder="Phone" required="">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="your-quali" value="" placeholder="Qualification" required="">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="your-exp" value="" placeholder="Experience" required="">
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="your-message" placeholder="Message..."></textarea>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<b> Attach CV(*):</b>
    <input type="file" name="yourresume"  size="40" class="hsinput" aria-required="true" aria-invalid="false" ></span> </label>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<img src="hscaptcha.php" style="float:left;margin-right: 9px;" /><input style="width:30%" type="text" name="capacha" value="" size="40" class="hsinput" aria-required="true" aria-invalid="false" placeholder="Enter Code"></span>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<input type="hidden" name="appliedjob" value="<?php  if(isset($_GET['Jobapply'])){echo $_GET['Jobapply'];}  ?>" />
										
									
										    <input type="submit" value="Apply" id="hide_but" class="theme-btn btn-style-four">
												<p id="load_span" class="load_span"></p>
											
                                    </div>
								</div>
							</form>
	<div id="successresult" class="alert alert-success" role="alert" style="display:none">Successfully received your details, Thank you.</div>
						</div>

				
				</div>
				</div>
				</div>
				
				
			</div>
		</div>
	</section>
	<!--End Office Section-->
	
	
	
	<?php include("common/footer.php") ?>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
 
  <script>
         function resetForm() {
            document.getElementById("formsubmitre").reset();
         }
            $('#formsubmitre').validate({
         
            rules: {
            
                'your-name': {
                    required: true,
                },
                'your-email': {
                    required: true,
                    email: true
                },
                'your-number': {
                    required: true,
                    number:true,
                    minlength:10,
                    maxlength:10
                },
                'your-quali': {
                    required: true,
                 },
                 'your-exp': {
                    required: true,
                 },
                
                 'yourresume': {
                    required: true,
                 },
                'capacha': {
                    required: true,
                
                    
                }
                
            },
            messages: {
                'your-name': "Please enter your Full Name",
            
                 'your-email': {
                    required: "Please enter your Email",
                
                },
                'your-number': {
                    required: "Please enter a Number",
                    
                },
                'quali': {
                    required: "Please enter Qualifiacion",
                 },
                 'exp': {
                    required: "Please enter Exprience",
                 },
                
               
                'yourresume': {
                    required: "Please Upload the CV",
                 },
                'capacha': {
                    required: "Please Proper Enter Code",
                    
                },
            },
         
         
            
            
            submitHandler: function(form) {
                $.ajax({
                   /* url: form.action,
                    type: form.method,
                    //data: $(form).serialize(),
                    dataType: "json",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,*/


                    url: 'common/applyjdExec.php',
      type: 'POST',
      data: new FormData( form ),
      processData: false,
      contentType: false,
                            
                    beforeSend: function() {
                                        $(".hide_but").hide();
                                        $(".load_span").html('Please wait...');  
                                    },
                    success: function(response) {
                        //$('#answers').html(response);
                        if(response.status==0){
                        
                        
                        $("#wpcf7-f2864-o1").hide();
                        $('#successresult').css("display","block")
                        $('#formsubmitre').trigger("reset");
                        //alert(response.message);
                        }
                        else if(response.status==4){
                            alert("Enter the code correct");
                            $(".hide_but").show();
                            $(".load_span").html('')
                        }else{
                            alert("Failed");
                            $(".hide_but").show();
                            $(".load_span").html('')
                        }
                    },    
                        error: function() { 
                                             alert("Something Happened Wrong");
                                             $(".hide_but").show();
                                            },
                                            
                                        complete: function() {
                                             $(".load_span").html('');                                                   
                                        }                       
                });
            }
         });
      </script>


</body>
</html>