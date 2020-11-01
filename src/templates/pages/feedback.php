<form action="" method="POST" id="feedback-form">
    <p><?= $locale['FEEDBACK_EMAIL'] ?></p>
    <label for="email"></label><input type="email" name="email" value="" id="email"/>
    <br>
    <p><?= $locale['FEEDBACK_SUBJECT'] ?></p>
    <label for="subject"></label><input type="text" name="subject" value="" id="subject"/>
    <br>
    <p><?= $locale['FEEDBACK_MESSAGE'] ?></p>
    <label for="message"></label><textarea type="text" name="message" id="message"></textarea>
    <br>
    <br>
    <div class="g-recaptcha" data-sitekey="reCAPTCHA_site_key"></div>
    <br>
    <input type="submit" name="submit" value="<?= $locale['FEEDBACK_SUBMIT_BUTTON'] ?>" id="submit-feedback-button">
</form>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if ($email === '' || $subject === '' || $message === '') {
        echo $locale['FEEDBACK_MESSAGE_FAILED_MISSING'];
        $secret = 'null';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse, true);
    } else {
        $secret = 'reCAPTCHA_secret_key';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse, true);
    }

    if ($responseData->success) {
        $support_mail = 'support@nebulr.org';

        $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Email: </b>$email</p>
                <p><b>Subject: </b>$subject</p>
                <p><b>Message: </b>$message</p>
            ";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers .= "From:$email\r\n";

        $mail = mail($support_mail, $subject, $htmlContent, $headers);
        echo $locale['FEEDBACK_MESSAGE_SUCCESS_SENT'];
    } else {
        echo $locale['FEEDBACK_MESSAGE_FAILED_RECAPTCHA'];
    }
}
?>