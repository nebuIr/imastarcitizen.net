<html>

<head>
</head>

<body>
    <?php
        $formular = "<form id=\"feedback-form\" action=\"".$SERVER[PHP_SELF]."\" method=\"post\"><p>".
                 "<label for=\"email\">email: </label><br>".
                 "<input type=\"email\" name=\"email\" id=\"email\" size=\"50\" value=\"".
                 $email."\"><br><br>".
                 "<label for=\"subject\">subject: </label><br>".
                 "<input type=\"text\" name=\"subject\" id=\"subject\" size=\"50\"".
                 " value=\"".$subject."\"><br><br>".
                 "<label for=\"message\">message:</label><br>".
                 "<textarea id=\"message\" name=\"message\" rows=\"7\" cols=\"45\">".
                 $message."</textarea><br><br>"."<input id=\"submit-feedback-button\" type=\"submit\" name=\"submit\" value=\"submit!\"><br>".
                 "</p></form>";

        if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if($email == "" || $subject == "" || $message == ""){
            echo "<p id=\"form_missing\">Please fill in the missing fields!</p>";
            echo $formular;
        }else{

          $datum = date("d.m.Y");
          $uhrzeit = date("H:i");

          $support_mail = "support@imastarcitizen.net";

          $text = "".$email." wrote you on ".$datum." at ".$uhrzeit.":\r\n\r\n".$message;
          $mailheader = "From: ".$from." <feedback@imastarcitizen.net>\r\n";

          $mail = mail($support_mail, $subject, $text, $mailheader);

        if($mail == true){
            echo "<p>Mail was successfully sent!</p>";
        }else{
            echo "<p>Mail could not be sent!</p>";
            }

        }

        }else{
            echo $formular;
        }
    ?>
</body>

</html>