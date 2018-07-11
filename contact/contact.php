<?php

if(isset($_POST['userEmail'])
    && isset($_POST['userName']) 
    && isset($_POST['subject'])
    && isset($_POST['message']))
{
    $name = $_POST['userName'];
    $user_email = $_POST['userEmail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
    $string_exp = "/^[A-Za-z .'-]+$/";
   
    if(preg_match($string_exp, $name) &&
        preg_match($email_exp, $user_email)&&
        preg_match($string_exp, $subject) &&
        preg_match($string_exp, $message)){
               
        $email_body = "You have received a new message from the user $name.\n". 
        "Here is the message:\n $message".

        $to = "m.zyskowska@yahoo.com";
        $headers = "From: $user_email \r\n";
        $headers .= "Reply-To: $user_email \r\n";

        mail($to,$subject,$message,$headers);
    }
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Martyna Zyskowska</title>
        <link rel="stylesheet" href="../about/about.css">
        <link rel="stylesheet" href="contact.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <main>
            <div id="wrap">
                <header>
                    <h1><span style="color:rgb(40, 192, 243)">Martyna</span> Zyskowska</h1>
                    <h2>Portfolio</h2>
                </header>
                <nav>
                    <ul>
                        <li><a href="../about/about.html">About</a></li>
                        <li><a href="../career/career.html">Career</a></li>
                        <li><a href="../hobby/hobby.html">Hobby</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div id="box">
                    <div id="boxBusinessCard">
                        <div id="boxBusinessCardDetails">
                            <div id="fieldName">Martyna Zyskowska</div>
                            <div id="fieldRole">SOFTWARE ADMINISTRATOR</div><br>
                            <div class="fieldContactType">Phone</div>
                            <div class="fieldContactDetails">0469 013 272</div><br>
                            <div class="fieldContactType">Email</div>
                            <div class="fieldContactDetails">m.zyskowska@yahoo.com</div><br>
                            <div class="fieldContactType">Website</div>
                            <div class="fieldContactDetails">www.martynazyskowska.com</div><br>
                            <div id="container">
                                <div id="circle"></div>
                            </div>
                            <div class="socials">
                                <a href="http://www.facebook.com/martynazyskowska" target="_blank" class="fa fa-facebook"></a>
                                <a href="https://www.youtube.com/channel/UChPndU4jje8bcv3mQ6ZbBqw/playlists" target="_blank" class="fa fa-youtube"></a>
                                <a href="https://www.linkedin.com/in/martyna-zyskowska" target="_blank" class="fa fa-linkedin"></a>
                                <a href="https://www.instagram.com/martynazyz/" target="_blank" class="fa fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                    <div id="emailForm"> 
                        <div id="greeting">Looking forward to answering your email</div>
                        <div id="emailFormDetails">
                            <form id="messageForm" method="post" action="" onsubmit="success()" >
                                <div id="firstRow">
                                    <input type="text" required id="userName" name="userName" placeholder="Name *" onfocus="this.placeholder=''" onblur="this.placeholder='Name *'" >
                                    <input type="email" required id="userEmail" name="userEmail" placeholder="Email *" onfocus="this.placeholder=''" onblur="this.placeholder='Email *'" >
                                </div>
                                <input type="text" required="required" id="subject" name="subject" placeholder="Subject" onfocus="this.placeholder=''" onblur="this.placeholder='Subject'" >
                                <textarea id="message" required="required" name="message" placeholder="Message" style="height:200px" onfocus="this.placeholder=''" onblur="this.placeholder='Message'"></textarea>  
                                <input id="send" type="submit" target="_blank" value="Send">
                            </form>
                        </div>
                    </div>
                 <div style="clear:both"></div>
                </div>
                <button onclick="topFunction()" id="bookmark"><i class="fa fa-arrow-circle-up"></i></button>     
            </div>
            <footer>
                <p>&copy; 2018 Martyna Zyskowska. All rights reserved.</p>
            </footer>
        </main>
        <script type="text/javascript">
             function success(){
                event.preventDefault();
                swal({
                    title: "Thank you for your message!",
                    text: "You will be contacted shortly.",
                    icon: "success"
                }).then(function(){
                    document.getElementById("messageForm").submit();
                 });
                return true; 
            }
        </script>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};
                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("bookmark").style.display = "block";
                    } else {
                        document.getElementById("bookmark").style.display = "none";
                    }
                }
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
    </body>
</html> 