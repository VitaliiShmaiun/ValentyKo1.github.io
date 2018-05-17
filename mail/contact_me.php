<?php    
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $from = 'From: valentyko1.github.io'; 
    $to = 'vetall17081996@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n  Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent! I will get back to you in 24 hours! Go <a href="htvalentyko1.github.io">back.</a></p>';
		
	} else { 
	    echo '<p>Something went wrong, go back and try again! Go <a href="http://valentyko1.github.io/hire.html">back.</a></p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly! Go <a href="http://valentyko1.github.io/hire.html">back.</a></p>';
    }


?>
