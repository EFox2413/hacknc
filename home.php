<html>
 <head>
  <title>EMAIL GAME</title>
 </head>
 <body>
 
 <?php
   require 'vendor/autoload.php'
   include 'sendgrid-php/SendGrid_loader.php';
   
   //INITIALIZE SENDGRID
   $sendgrid = new SendGrid('jrdbnntt', 'hackFSU');
   
   $siteEmail = 'test@test.jaredisawesome';
      
   //MAKE EMAIL
   $mail = new SendGrid\Mail();
   $mail->
      addTo('jrdbnntt@gmail.com')->
      setFrom($siteEmail)->
      setSubject('TEST FROM SENDGRID')->
      setText('YAY!!!!')->
      setHtml('<strong>YAY!!!!</strong>');
      
   //SEND EMAIL
   $sendgrid->
      smtp->
         send($mail);
         
   echo 'PAGE'
   
   
?>
 
 

 </body>
</html>