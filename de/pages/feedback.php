<html>
    
    <head>
        
        
        
    </head>
    
    <body>
        
    <?php
        // Das Kontaktformular
        $formular = "<form id=\"feedback-form\" action=\"".$SERVER[PHP_SELF]."\" method=\"post\"><p>".
                 "<label for=\"email\">Email: </label><br>".
                 "<input type=\"text\" name=\"email\" id=\"email\" size=\"50\" value=\"".
                 $email."\"><br><br>".
                 "<label for=\"subject\">Titel: </label><br>".
                 "<input type=\"text\" name=\"subject\" id=\"subject\" size=\"50\"".
                 " value=\"".$subject."\"><br><br>".
                 "<label for=\"message\">Nachricht:</label><br>".
                 "<textarea id=\"message\" name=\"message\" rows=\"7\" cols=\"45\">".
                 $message."</textarea><br><br>"."<input id=\"submit-feedback-button\" type=\"submit\" name=\"submit\" value=\"senden!\"><br>".
                 "</p></form>";

        // Wenn Formular abgeschickt wurde,...
        if(isset($_POST['submit'])){

        // ...dann nehme Formular-Daten entgegen und speichere sie in Variablen.
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Domain der eingegebenen Email-Adresse wird für Existenzprüfung ermittelt
        $check_email = list($host_user, $host_name) = split("@", $email);

        // Wenn eines der Formular-felder leer ist, dann gib Fehlermeldung aus
        if($email == "" || $subject == "" || $message == ""){
            echo "<p>Bitte fülle die fehlenden Felder aus!</p>";
            echo $formular;
        }else{

        // ...werden Datum und Uhrzeit Variablen zugewiesen.
          $datum = date("d.m.Y");
          $uhrzeit = date("H:i");


        // Trage hier deine Email-Adresse ein. An sie werden die messageen geschickt.
          $support_mail = "support@imastarcitizen.net";

        // Inhalt der Email wird zusammengebaut.
          $text = "".$email." wrote you on ".$datum." at ".$uhrzeit.":\r\n\r\n".$message;
          $mailheader = "From: ".$from." <feedback@imastarcitizen.net>\r\n";

        // Email wird versendet.
          $mail = mail($support_mail, $subject, $text, $mailheader);

        // Rückmeldung wird ausgegeben.
        if($mail == true){
            echo "<p>Mail wurde erfolgreich versendet!</p>";
        }else{
            echo "<p>Mail konnte nicht gesendet werden!</p>";
            }

        }

        // Wenn "Senden"-Button nicht getätigt wurde, dann zeige Formular an.
        }else{
            echo $formular;
        }
    ?>
            
    </body>
    
</html>