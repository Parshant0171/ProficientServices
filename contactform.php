<?php
    if(isset($_POST['Send Message'])){
        $name = $_POST['Your Name'];
        $number = $_POST['Phone Number'];
        $mailForm = $_POST['Email-Id'];
        $message = $_POST['Message'];

        $mailTo =  "advocatedikshant@gmail.com";
        $headers = "From: ".$mailForm;
        $txt = "You have received and e-mail from ".$name.".\n\n".$message;


        mail($mailTo, $number, $txt, $headers);
        header("Location: index.html?mailsend");
    }


?>