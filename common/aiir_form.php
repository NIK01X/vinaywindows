<?php

  if($_SERVER['REQUEST_METHOD']=='POST' ){

                  date_default_timezone_set("Asia/Calcutta");
				$subject="Aiir website form Submited";
                 $mailbody='Name : ' . $_POST["aiirname"].'<br>Email :' . $_POST["aiiremail"].'<br>phone :' .'<br>eMessage :' . $_POST["aiirmessage"];
              
                    require_once 'mailinclude.php';
                    $mail->Subject = $subject;
                    $mail->Body = $mailbody;
                    $mail->IsHTML(true);
					 $mail->addAddress('connect@aiir.in', 'AiiR');
					$mail->addReplyTo('connect@aiir.in', 'AiiR');	
					  $mail->send();
	//	echo "Thank you... :-)";
		echo '<script>
		alert("Thank you, we received your query and will get back soon.");
		window.location.href = "https://mmupvcwindows.com/";
		</script>';
		
		
 }else{
    echo '<script>
		alert("ERROR!! Please fill it again");
		window.location.href = "https://mmupvcwindows.com/cpntact.php";
		</script>';
 }
 

  
 
?>