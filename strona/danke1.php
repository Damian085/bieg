<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biegniemy, by pomagać</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="danke.css">
    <link rel="shortcut icon" type="image/png" href="img/logo-bez-dolu.png"/>
    
    <script src="https://kit.fontawesome.com/3e6ad510db.js" crossorigin="anonymous"></script> 
</head>
<body>
    <header class="header">
		<div class="logo"><a href="/"><img src="img/cale-logo.png" style="width:200px;height:100px;border-radius: 5px;box-shadow: 0 0 10px 10px white;"></a></div>
      <ul class="main-nav">
        <li><a href="#o-nas">O nas</a></li>
        <li><a href="#zapisy">Zapisy</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
      </ul>
	</header> 
    <div class="container">
    <?php
include('connect.php');				
                if ( isset($_POST['sbm']) ) {
                    $imie1 = $_POST['imie1'];
                    $nazwisko1 = $_POST['nazwisko1'];
                    $email1 = $_POST['email1'];  
                    
                  $statement = $mysqli->prepare("INSERT rekru (imie,nazwisko,email) VALUES (?,?,?)");
                  $statement->bind_param("sss",$imie1,$nazwisko1,$email1);
                  $statement->execute();
                  $statement->close();						
                }
                    $result = $mysqli->query("SELECT * FROM rekru ORDER BY id DESC LIMIT 1");                    
                    while ( $check = mysqli_fetch_array($result) ) {                      
                        echo'<div class="table">';
                        echo"<div class='title1'>";
                        echo"<h2>Twoja rezerwacja<h2>";
                        echo'</div>';
                        echo"<table>";
                        echo"<tr>";
                    echo"<td>Imię</td> <td>" . $imie1 . "</td>";
                        echo"</tr><tr>";                            
                    echo"<td>Nazwisko</td> <td>" . $nazwisko1 . "</td>";
                        echo"</tr><tr>";    
                    echo"<td>Data</td> <td>" . $email1 . "</td>";
                        echo"</tr>";                     
                    echo"</table>";
                     echo"<div class='butt'>";
                    echo"<button id='adf'><a href='/'>Idź do strony głównej</a></button>";
                     echo'</div>';
                     echo'</div>';
                    }
                    
                    
?>
         </div>
         <footer>
            <div class="fcontent">
                <div class="top">
                  <div class="top1"><h1>Gdzie?</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27060.82888818456!2d21.95244469443097!3d53.166516224285736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471e36ded517f857%3A0x222ad7df6d64d80f!2sVia%20Baltica!5e0!3m2!1spl!2spl!4v1635173304206!5m2!1spl!2spl" width="350" height="250" style="border:0;"></iframe>
                  </div>
                  <div class="top2"><h1>Kiedy?</h1>
                    
                        <img src="img/calendar.png" alt="kalendarz z wybraną datą odbycia biegu">
                  </div>
                  <div class="top3"><h1>Kontakt</h1>
                    <i class="fas fa-mail-bulk"></i>
                    <a href="mailto:admin@biegniemybypomagac.pl">admin@biegniemybypomagac.pl</a><br>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+48713333222">+48 123123123</a>
                  </div>
                </div>
                <hr>
                <div class="bottom">
                  Copyright &copy <a href="/">biegniemybypomagac.pl</a> 2021
                </div>
                </div> 
        </footer> 
    </body>
</html>