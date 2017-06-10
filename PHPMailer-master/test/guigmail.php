<?php 


    function sendMail($title, $content, $nTo, $mTo,$diachicc=''){
        $nFrom = 'Phan Trung Phú';
        $mFrom = 'ithumgttd@gmail.com';  //dia chi email cua ban 
        $mPass = 'trungphu';       //mat khau email cua ban
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
        $mail->AddReplyTo('phupt.humg.94@gmail.com', 'Trung Phú NA');
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
        $mail->AddReplyTo('info@freetuts.net', 'Freetuts.net');
        $mail->AddAttachment($file,$filename);
        if(!$mail->Send()) {
            return 0;
        } else {
            return 1;
        }

    }

    function send_gmail($from_email, $from_email_pass, $to_email, $to_name, $subject, $content, $from_name=''){
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com"; // specify main and backup server
        $mail->Port = 465; // set the port to use
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Username = $from_email; // your SMTP username or your gmail username
        $mail->Password = $from_email_pass; // your SMTP password or your gmail password
        $mail->From = $from_email;
        $mail->FromName = $from_name; // Name to indicate where the email came from when the recepient received
        $mail->AddAddress($to_email,$to_name);
        $mail->AddReplyTo($from_email,$from_name);
        $mail->WordWrap = 50; // set word wrap
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = $subject;
        $mail->Body = $content; //HTML Body
        return $mail->Send();
    }

 ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Gủi gmail </title>
        <link rel="stylesheet" href="">
        <!-- Latest compiled and minified CSS & JS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
    </head>
    <body>
        <div class="container" style="margin: 50px auto">
            <h2> Gửi gmail </h2>


            <?php 
                            //goi thu vien
                include('../class.smtp.php');
                include "../class.phpmailer.php"; 
                // include "functions.php"; 
                $title = 'Hướng dẫn gửi mail bằng phpmailer';
                $content = 'Bạn đang tìm hiểu về cách gửi email bằng php mailler trên freetuts.net chúc các bạn có những phút giây vui vẻ.';
                $nTo = 'Huudepzai';
                $mTo = 'dovietanh040994@gmail.com';
                $diachicc = 'xcc@gmail.com';
                //test gui mail
                $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
                if($mail == 1)
                echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';
                else echo 'Co loi!';

                $mails = sendMailAttachment($title, $content, $nTo, $mTo,$diachicc='','filedinhkem.docx','Day la file dinh kem');

                $name = send_gmail("ithumgttd@gmail.com","trungphu","phupt.humg.94@gmail.com","Đỗ Việt Anh","Test Gủi gmail"," Óc chó ","Trung Phú NA");

                echo $name;
             ?>
        </div>
    </body>
</html>