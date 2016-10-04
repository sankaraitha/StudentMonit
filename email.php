<?php
/*$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: [email]sivasankaraitha@gmail.com[/email]' . "\r\n";*/

/*if(mail("sankaraitha@gmail..com", "Test mail", "Test body", 'sivasankaraitha@gmail.com'))
echo "sent";
echo "sent";*/

if(mail(
     'sivasankaraithamail@gmail.com',
     'Works!',
     'An email has been generated from your localhost, congratulations!','sivasankaraitha@gmail.com'))
{
  echo "Mail sent Successfully";
}
else
  {
  echo "Mail does n't sent";
}

?>
