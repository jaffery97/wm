<meta name="viewport" content="width=device-width, initial-scale=1">
<?php

//From -1: Personal Information


$email = $_POST['email'];
$message = $_POST['message'];



//sending mail
                $to = "daarulhikmahny@gmail.com";
                $subject = "WEB MEETING ISSUES|DHNY";
                $title = "WEB MEETING ISSUES|DHNY";
                $txt = message;
                
                $headers = "From: $email" . "\r\n" .
                "CC: magfurhjafory1996@gmail.com";
                mail($to,$subject,$txt,$headers);



echo "<h1 style='text-align:center;'>Thank you</h1>";
echo "<center> <a href='index.html'>Go to Main page</a> </center>";

header('Location:index.html');


?>