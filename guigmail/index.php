<?php 

    include('class.smtp.php');
    include "class.phpmailer.php"; 
    function sendMail($title, $content, $nTo, $mTo,$diachicc='')
    {
        $nFrom = 'Trung Phú NA';//mail duoc gui tu dau, thuong de ten cong ty ban
        $mFrom = 'codedoan94@gmail.com';  //dia chi email cua ban 
        $mPass = '12345678a@';       //mat khau email cua ban
        $mail             = new PHPMailer();
        $body             = $content;
        $mail->IsSMTP(); 
        $mail->CharSet   = "utf-8";
        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;                    // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";        
        $mail->Port       = 465;
        $mail->Username   = $mFrom;  // GMAIL username
        $mail->Password   = $mPass;               // GMAIL password
        $mail->SetFrom($mFrom, $nFrom);
        //chuyen chuoi thanh mang
        $ccmail = explode(',', $diachicc);
        $ccmail = array_filter($ccmail);
        if(!empty($ccmail)){
            foreach ($ccmail as $k => $v) {
                $mail->AddCC($v);
            }
        }
        $mail->Subject    = $title;
        $mail->MsgHTML($body);
        $address = $mTo;
        $mail->AddAddress($address, $nTo);
        $mail->AddReplyTo('codedoan94@gmail.com', 'codedoan94');
        if(!$mail->Send()) {
            return 0;
        } else {
            return 1;
        }
    }
     
    function sendMailAttachment($title, $content, $nTo, $mTo,$diachicc='',$file,$filename){
        $nFrom = 'Trung Phú NA';
        $mFrom = 'phupt.humg.94@gmail.com';  //dia chi email cua ban 
        $mPass = 'kiemtienmuusinh'; 
        $mail             = new PHPMailer();
        $body             = $content;
        $mail->IsSMTP(); 
        $mail->CharSet   = "utf-8";
        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;                    // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = "localhost";        
        $mail->Port       = 25;
        $mail->Username   = $mFrom;  // GMAIL username
        $mail->Password   = $mPass;               // GMAIL password
        $mail->SetFrom($mFrom, $nFrom);
        //chuyen chuoi thanh mang
        $ccmail = explode(',', $diachicc);
        $ccmail = array_filter($ccmail);
        if(!empty($ccmail)){
            foreach ($ccmail as $k => $v) {
                $mail->AddCC($v);
            }
        }
        $mail->Subject    = $title;
        $mail->MsgHTML($body);
        $address = $mTo;
        $mail->AddAddress($address, $nTo);
        $mail->AddReplyTo('info@freetuts.net', 'Freetuts.net');
        $mail->AddAttachment($file,$filename);
        if(!$mail->Send()) {
            return 0;
        } else {
            return 1;
        }

    }


 ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Gủi gmail </title>
        <link rel="stylesheet" href="">
       
    </head>
    <body>
        <div class="container" style="margin: 50px auto">
            <h2> Gửi gmail </h2>


            <?php 
                            //goi thu vien
                // include 'class.phpmailer.php';
                // include 'class.smtp.php';
                $title = 'Hướng dẫn gửi mail bằng phpmailer';
                $content = 'Bạn đang tìm hiểu về cách gửi email bằng php mailler trên freetuts.net chúc các bạn có những phút giây vui vẻ.';
                $nTo = 'Huudepzai';
                $mTo = 'phupt.humg.94@gmail.com';
                $diachicc = 'xcc@gmail.com';
                //test gui mail
                $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
                if($mail == 1)
                echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';
                else echo 'Co loi!';
             ?>
        </div>
    </body>
</html>