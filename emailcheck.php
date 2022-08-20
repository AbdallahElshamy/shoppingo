<?php
include_once "Database.php";
$db = new Database();
session_start();
$r = $db ->GetData("select * from customer where email='".$_GET["user"]."'");
if ( $row = mysqli_fetch_assoc($r) )
     {
        require_once "src/PHPMailer.php";
        require_once "src/Exception.php";
        require_once "src/SMTP.php";
        require_once "vendor/autoload.php";
            
            $mail = new  PHPMailer\PHPMailer\PHPMailer();
            $email=$_GET["user"];
            $mail->IsSMTP();
            //$mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';     //secure بيشغل ال
            $mail->Host = "smtp.gmail.com";  // gmail of web
            $mail->Port = 465; // or 587   //port of gmail
            $mail->IsHTML(true);
    
            $mail->Username = "hohog5052@gmail.com";
            $mail->Password = "koko@1234";
    
            $mail->setFrom('yourmobileapp2017@gmail.com', 'Shoppingo');
    
            $mail->addAddress($email, "Shoppingo");
            $mail->Subject = 'Forget Password';
            $id=$row["cust_id"];
            $code=rand(11111,99999);
            $_SESSION["activ"]=$code;
           
            $mail->Body = "Dear Mr/Mrs ".$row['name']."<br/>http://localhost/shop/activationcode.php?uid=$id<br/>Your Activation Code is <h2>$code</h2>";
            
            if(!$mail->send()) {
              //  echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            else
                {
                    echo "ok";
                }
            }     
    else
         {
             echo"<div class='alert alert-danger'> This Email not exists </div>";
          }

?>



