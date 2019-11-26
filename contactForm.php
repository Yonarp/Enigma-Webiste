<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $description = $_POST['description'];

        $mailTo = "vgupta463@gmail.com";
        $headers = "From: " . $mailFrom;
        $txt = "You have received an e-mail from " .$name.".\n\n".$description;


        if (mail($mailTo, $subject, $txt, $headers)) {
            echo ("<br>" . "Email Sent!" . "</br>");
        };

        header("Location: index.php?mailsend");
    }
    print("<p>Form Submitted</p>");
?>