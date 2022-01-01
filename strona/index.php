<?php
  include('connect.php');
    
        //   function validateEmail($email) {
        //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         return false;
        //     }
        //     else {
        //         return true;
        //     }
        // } 

        // function emptyFields($uname, $email, $upwd, $upwdrpt){
        //   if (!$uname || !$email || !$upwd || !$upwdrpt) {
        //       return true;
        //   }else{
        //       return false;
        //   }
        // } 

                
          

      if ( isset($_POST['submit']) ) {
        
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $email = $_POST['email'];            
      
        $statement = $mysqli->prepare("INSERT zawodnicy (imie,nazwisko,email) VALUES (?,?,?)");
        $statement->bind_param("sss",$imie,$nazwisko,$email);
        $statement->execute();
        $statement->close();						
      }
      if ( isset($_POST['sbm']) ) {{}
        $imie1 = $_POST['imie1'];
        $nazwisko1 = $_POST['nazwisko1'];
        $email1 = $_POST['email1'];      

      $statement = $mysqli->prepare("INSERT rekru (imie,nazwisko,email VALUES (?,?,?,?)");
      $statement->bind_param("sssss",$imie1,$nazwisko1,$email1);
      $statement->execute();
      $statement->close();						
  }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biegniemy, by pomagać</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="shortcut icon" type="image/png" href="img/logo-bez-dolu.png"/>    
    <script src="https://kit.fontawesome.com/3e6ad510db.js" crossorigin="anonymous"></script> 
</head>
<body>
    <header class="header">
		<div class="logo"><a href="/"><img src="img/cale-logo.png" style="width:200px;height:100px;border-radius: 5px;box-shadow: 0 0 10px 10px white;"></a></div>
      <ul class="main-nav">
        <li><a href="#o-nas">O nas</a></li>
        <li><a href="#zapisy">Zapisy</a></li>
        <li><a href="#rekrutacja">Rekrutacja</a></li>
      </ul>
	</header> 
    <div class="container">
      <div id="o-nas">
       <div class="contact-box">
			  <div class="left"></div>
			    <div class="right">
			    	<h1>O nas</h1>
			     	<div class="text">
              <p>Etiam non leo ac magna varius faucibus. Duis lacus velit, elementum at velit eget, aliquam fringilla ante. Donec dolor mauris, vulputate vitae ipsum ac, consequat lobortis mauris. Integer sodales ultrices purus, sed ultrices velit faucibus et. Cras sed tempor erat. Pellentesque sollicitudin, justo ac varius tempus, lectus lacus blandit est, lobortis euismod augue risus id mauris. Nunc nec volutpat metus. Vivamus scelerisque justo nisi, efficitur facilisis risus tempus sit amet. Nam nibh massa, placerat vitae tincidunt et, sagittis at metus. Aliquam id magna arcu. Donec non leo faucibus nulla dictum tempor. In at lobortis tellus.</p>
             </div>
			    </div>
	    	</div>
      </div>
      <div id="zapisy">
      <div class="form1">
          <div class="left-a">
            <img src="img/zapisz.png" alt="Zapisz się!">
          </div>        
          <form action="danke.php" method="post">
            <div class="inputs">              
              <input type="text" name="imie">
              <span>Imię</span>              
            </div>
            <div class="inputs">
              <input type="text" name="nazwisko">
              <span>Nazwisko</span>
            </div>              
            <div class="inputs">
              <input type="email" name="email">
              <span>E-mail</span>
            </div>         
            <?php 

              if(isset($_GET['e'] ) ){
                echo"<span class='err'>Prosze uzupełnić poprawnie wszystkie dane</span>";
              }

            ?>          
            <div class="inputs">
              <input type="submit" name="submit" id="sbm"  Value="Wyślij zgłoszenie">
            </div>
          </form>
        <div>
      </div>      
    </div>   
      <div id="rekrutacja">
        <div class="form1">     
              <div class="a">
                <div class="zostan">
                 <h1>Zostań jednym z nas!</h1>  
                </div> 
              <form  action="danke1.php" method="post" >
                <div class="inputs">
                  <input type="text" name="imie1">
                  <span>Imię</span>
                </div>
                <div class="inputs">
                  <input type="text" name="nazwisko1">
                  <span>Nazwisko</span>
                </div>
                <div class="inputs">
                  <input type="text" name="email1">
                  <span>E-mail</span>
                </div>                                                        
                <div class="inputs">
                  <input type="submit" name="sbm" id="sbm1" Value="Wyślij">
                </div>
              </form>
              </div>
              <div class="right-a">
                <img src="img/zapisz1.png" alt="">
              </div>
            <div>
          </div>        
        </div>   
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
        <!-- <button onclick="myWindow()">a</button>
      
        <script>
          function myWindow(){
            myWindow=window.open('index.php','myWin','width=400,height=650');
          }
        </script> -->
</body>
</html>
