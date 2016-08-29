<html>

<head>
</head>

<body>
    <form action="" method="POST" id="feedback-form">
        <p>Email:</p>
        <input type="email" name="email" value="" id="email" />
        <br>
        <p>Titel:</p>
        <input type="text" name="subject" value="" id="subject" />
        <br>
        <p>Nachricht:</p>
        <textarea type="text" name="message" id="message"></textarea>
        <br>
        <br>
        <div class="g-recaptcha" data-sitekey="reCAPTCHA_site_key"></div>
        <br>
        <input type="submit" name="submit" value="SUBMIT" id="submit-feedback-button">
        <?php

        if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if($email == "" || $subject == "" || $message == ""){
            echo "<p id=\"message_failed\">Bitte fülle die fehlenden Felder aus!</p>";
        }else{
        $secret = 'reCAPTCHA_secret_key';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        }
            
        if($responseData->success){

            $support_mail = "support@imastarcitizen.net";

            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Email: </b>".$email."</p>
                <p><b>Subject: </b>".$subject."</p>
                <p><b>Message: </b>".$message."</p>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From:'.$email."\r\n";

            $mail = mail($support_mail, $subject, $htmlContent, $headers);
            echo "<p id=\"message_success\">Mail wurde erfolgreich gesendet!</p>";
        }else{
            echo "<p id=\"message_failed\">Verifikation fehlgeschlagen, bitte erneut versuchen.</p>";}
        }
    ?>
</body>

</html>