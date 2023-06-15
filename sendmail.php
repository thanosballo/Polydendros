<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailing..</title>
    <link rel="stylesheet" href="css/mail.css">
</head>
<body>
    

<?php 
    {
        $name = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['telephone'];
        $colabtype = $_POST['colabtype'];
        $comment = $_POST['comment'];
        $subject = "Αίτημα Επικοινωνίας ";
        
        $mailto = "giotasemou@gmail.com"; 
       
        $message = "Όνομα πελάτη: " . $name . "\n"
        . "Επώνυμο: " . $lastname . "\n"
        . "Αίτημα γιά: " . $colabtype . "\n"
        . "Τηλέφωνο: " . $phone . "\n\n"
        . "Μήνυμα: " . "\n" . $comment;
        
        $headers = "From: " . $email; 

        
        mail($mailto, $subject, $message, $headers); 
    	
	}
?>
<main>
<div class="wrapper">
<h3>Ευχαριστούμε για το μήνυμα σας </h3>
<p>Επιστροφή στην <a href="/index.html">αρχική</a></p>
</div>
</main>

</body>
</html>