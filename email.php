    <?php
    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    mysql_select_db("niftytrendz", $con);
    $sql="INSERT INTO formdata (name,email,phone, message)
    VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[message]')";
    if (!mysql_query($sql,$con))
      {
      die('Error: ' . mysql_error());
      }
    echo "Your Information Was Successfully Posted";
    mysql_close($con);
    $to = "trendznifty@gmail.com"; 
    $subject = "Contact Form"; 
    $email = $_POST['email'] ; 
    $message = $_POST['message'] ; 
    $headers = "From: $email"; 
    $sent = mail($to, $subject, $message, $headers) ; 
    if($sent) 
    {print "Your mail was sent successfully"; }
    else 
    {print "We encountered an error sending your mail"; }
    ?>
