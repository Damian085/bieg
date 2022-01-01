<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biegniemy, by pomagać</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mail.css">
    <link rel="shortcut icon" type="image/png" href="/strona/img/logo-bez-dolu.png"/>    
    <script src="https://kit.fontawesome.com/3e6ad510db.js" crossorigin="anonymous"></script> 
</head>
<body>
    <header class="header">
		<div class="logo"><a href="/"><img src="/strona/img/cale-logo.png" style="width:200px;height:100px;border-radius: 5px;box-shadow: 0 0 10px 10px white;"></a></div>
      <ul class="main-nav">        
        <li><a href="/admin/zawodnicy">Zawodnicy</a></li>
        <li><a href="/admin/rekru">Rekrutacja</a></li>
        <li><a href="/admin">Lista</a></li>
        <li><a href="/admin/mail">Mail</a></li>
      </ul>
	</header> 
        <div class="container">
            <div class="main">            
                <div class="box">
                    <div class="title1">
                        <h1>Wyślij wiadomość</h1>
                    </div>
                    <form action="mail1.php" method="POST">
                        <h3>Tytuł</h3>
                        <div class="input">
                            <input type="text" name="title" required>
                        </div>
                        <h3>Treść</h3>
                        <div class="input">
                            <textarea name="tresc" required></textarea>
                        </div>
                        <div class="input1">
                            <input type="submit" name="submit" class="submit">
                        </div> 
                    </form>                  
                </div>
            </div>            
        </div>
    </body>
</html>