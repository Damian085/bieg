<?php



    function mailAll(){
        $server = 'localhost';
        $user = 'u235805072_bembol';
        $pwd = 'B3mbol123!';
        $name = 'u235805072_bieg';
        
        $conn = mysqli_connect("$server","$user","$pwd","$name");
        $query = mysqli_query($conn,"SELECT email FROM `zawodnicy` WHERE accept = 1");

        $mail = null;
        while($row = mysqli_fetch_array($query, MYSQLI_BOTH)){
            if (!$mail){ 
                $mail = $row['email'];
            }else{
                $mail = $mail . ", " . $row['email'];
            }
        }

        $subject = $_POST['title'];
        $message = $_POST['tresc'];
        $headers = 'From: admin@biegniemybypomagac.pl' . "\r\n" .
        'Reply-To: admin@biegniemybypomagac.pl' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
            
            mail($mail, $subject, $message, $headers); 
        
    }
                   
                    
