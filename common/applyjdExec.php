<?php


	session_start();
    if($_SESSION["captcha_code"] == $_POST['capacha']){

    if(((isset($_POST['your-name'])) && $_POST['your-name'] !='') && ((isset($_POST['your-number'])) && $_POST['your-number'] != '') && ((isset($_POST['your-email'])) && $_POST['your-email'] !='')){
        $currentdate=date('Y-m-d');
    
    
  $temp = explode(".", $_FILES["yourresume"]["name"]);
        $newfilename = rand(10,10000).$_POST['your-name'].'_'. $_POST['your-number'] . '.' . end($temp);

        move_uploaded_file($_FILES["yourresume"]["tmp_name"], "../resumes/" . $newfilename);


        require_once 'mailinclude.php';
        $mailbody1="<div style='font-family:arial,sans-serif;font-size:12.8px;max-width:600px;margin:0px auto;width:594px;border-radius:10px'>
    <div style='font-size:13px'>
        <p>
            <a href='https://mmwindowsystem.com/' target='_blank'><img src='https://mmwindowsystem.com/images/logo.png' width='150px' style='width:178.188px;padding:5.9375px' class='CToWUd'></a>
        </p>
    </div>
    <div style='font-size:14px;width:594px'>
        <h4 style='margin:5px auto;padding:5px 0px;color:white;background-color:rgb(0,160,227)'>&nbsp;&nbsp;Website Form Details</h4></div>
    <div style='text-align:justify'>
       <table style='font-family:arial;font-size:14px;width:596px'>
            <tbody>
             <tr bgcolor='#f5f5f5'>
				 <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'>  Applied For </td>
				<td width='450' style='padding: 10px;'>".$_POST['appliedjob']."</td>
               </tr>  
                <tr bgcolor='#f5f5f5'>
				 <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'>  Name </td>
				<td width='450' style='padding: 10px;'>".$_POST['your-name']."</td>
               </tr>  
				
			
			<tr bgcolor='#f5f5f5'>
			   <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'> Number</td>
			  <td width='450' style='padding: 10px;'>".$_POST['your-number']."</td>
            </tr>  
				
			
			<tr bgcolor='#f5f5f5'>
				 <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'>  Email </td>
				 <td width='450' style='padding: 10px;'> ".$_POST['your-email']."</td>
            </tr> 
            	<tr bgcolor='#f5f5f5'>
				 <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'>  Qualification </td>
				 <td width='450' style='padding: 10px;'> ".$_POST['your-quali']."</td>
            </tr> 
            	<tr bgcolor='#f5f5f5'>
				 <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'>  Exp. </td>
				 <td width='450' style='padding: 10px;'> ".$_POST['your-exp']."</td>
            </tr> 
            <tr bgcolor='#f5f5f5'>
				 <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'>  Remark </td>
				 <td width='450' style='padding: 10px;'> ".$_POST['your-message']."</td>
            </tr>  			
            <tr bgcolor='#f5f5f5'>
            <td bgcolor='#e5e5e5' width='232' style='padding: 10px;'>  Resume </td>
            <td width='450' style='padding: 10px;'> <a href='https://mmwindowsystem.com/resumes/".$newfilename."' > Download Resume</a></td>
       </tr> 
				
             
            </tbody>
        </table>
     </div>
   
    <div style='font-size:14px;text-align:justify'>
        <p style='background-color:#AAACAD;padding:5px;color:black;margin-top:5px;text-align:center'>Powerd By <a href='https://aiir.in' style='color:black;'>AiiR</a></p>
      
          </p>
    </div>
    </div>";


        //...

        $mail->IsHTML(true);
       $mail->AddAddress("hitesh@hitesh.co.in");
       
        $mail->Body=$mailbody1;
       //$mail->AddAttachment($_FILES['yourresume']['tmp_name'],$newfilename);
        $mail->Subject="MMWINDOWS Job applied for ". $_POST['appliedjob'];
            if($mail->Send()){
                $redata['status'] ='0';
            }else{
                $redata['status'] ='1';
            }


    }else{
        $redata['status'] ='1';
    }


  }else{
    $redata['status'] ='4';
    }
 header("Content-Type: application/json; charset=UTF-8");
 echo json_encode((object) $redata);

?>