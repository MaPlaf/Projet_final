<!DOCTYPE HTML>
<html>
	<head>
		<title>Paradigm</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans_old:400,500,700|Google+Sans+Text:400">
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="../css/main.css" />
	</head>

	<body class="bgimg-3" >

        <div class="w3-center" style="margin-top: 15rem;">

            <?php

            $to = "email@gmail.com";
            $subject = "Commentaire Paradigm de". ' '. htmlspecialchars($_POST['Name']);
            $message = htmlspecialchars($_POST['Comment']);
            $headers = "From: " . $_POST['Email'];
            

            if(check_email($_POST['Email'])){
                mail($to,$subject,$message,$headers);
                echo '<h2 class="w3-text-light-grey">Your message has been sent.</h2>';
            }else{
                echo "<h2 class='w3-text-light-grey'>Sorry, an error occurred.<br><span style='font-size:smaller;'>Please try again with a valid email.</span></h2><br>";
            }

            function check_email($email){
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                 return true;
                }
            }

            ?>

            <a href="../../index.html">Back to website</a>

        </div>

	</body>
</html>
