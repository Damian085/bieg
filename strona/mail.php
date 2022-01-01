<?php

function mail1($mail,$imie,$nazwisko){

$recipients = array(
    "dam.dan@wp.pl","$mail"
  );

$to = implode(',', $recipients);
$subject = "Potwierdzenie zgłoszenia";
$message = "<h1>Witaj, $imie </h1> 
        <h3>To jest twoja rezerwacja</h3>
        
        <style>
        table{
            background:#cfcfcf;
        }
            table,tr,td{
                border:1px solid black;
        }
        </style>

        <table cellspacing='0'>
        <tr>
            <td>Imie</td>
            <td>$imie</td>
        </tr>
        <tr>
            <td>Nazwisko</td>
            <td>$nazwisko</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>$mail</td>
        </tr>
        </table>



        
        ";
$headers = 'MIME-Version: 1.0' . "\r\n" .
'Content-type: text/html; charset=iso-8859-1' . "\r\n" . 
'From: admin@biegniemybypomagac.pl' . "\r\n" .
'Reply-To: admin@biegniemybypomagac.pl' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers); 

}