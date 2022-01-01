<?php 

    function mailAll($mail,$imie,$nazwisko){
                    $server = 'localhost';
                    $user = 'u235805072_bembol';
                    $pwd = 'B3mbol123!';
                    $name = 'u235805072_bieg';
                    
                    $conn = mysqli_connect("$server","$user","$pwd","$name");
                    $query = mysqli_query($conn,"SELECT * FROM `zawodnicy` WHERE accept = 1");
                    
                    while($row = mysqli_fetch_row($query)){
                        $to = $row[0];
                    }
                    $subject = "Potwierdzenie zg�oszenia";
                    $message = "Witaj $imie $nazwisko. 
                            To jest twoja rezerwacja 
                            A to tw�j mail $mail";
                    $headers = 'From: admin@biegniemybypomagac.pl' . "\r\n" .
                    'Reply-To: admin@biegniemybypomagac.pl' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                        
                        mail($to, $subject, $message, $headers); 
                    
                    }
                   
                    $server = 'localhost';
                    $user = 'u235805072_bembol';
                    $pwd = 'B3mbol123!';
                    $name = 'u235805072_bieg';
                    
                    $conn = mysqli_connect("$server","$user","$pwd","$name");
                    $query = mysqli_query($conn,"SELECT email FROM `zawodnicy`");
                    
                    while($row = mysqli_fetch_row($query)){
                        $to = $row[0];
                    }
