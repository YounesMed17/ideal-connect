 <?php

if(isset($_POST['submit'])){
    $to = "commercial@ideal-connect.tn"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['nom'];
    $subject = $_POST['objet'];
    $message = $name . " ". " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "
    
    <script>
    window.location.href='index.html';
    </script>
    ";



    
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Testing PHP</title>
    </head>
    <body>


    </body>
</html>