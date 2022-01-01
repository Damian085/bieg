<!DOCTYPE html>
<html lang="pl">
<link rel="icon" href="strona/img/logo-bez-dolu.png">
<head>
    <meta charset="UTF-8">
    <style>
            video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            }
            .video{
                height:80vh;
                width:100%;
                display:flex;
                align-items:center;
            }
            .video .tekst{
                margin: 0 0 0 40px;
                color:whitesmoke;
            }
            .tekst button {
                display: block;
            }
            .go{
                background: red; 
                border: none;
                color: white;
                padding: 0 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                box-shadow: 0 0 10px 10px red;
                margin: 10px;
            }
        </style>
</head>
<body>
        <div class="video">
            <video autoplay muted loop>
              <source src="strona/img/running.mp4">
            </video>
            <div class="tekst">
                <img src="strona/img/cale-logo.png"  style="width:200px;height:100px;border-radius: 5px;box-shadow: 0 0 10px 10px white;"><br>
                <a href="strona" class="go"><h1>Strona główna</h1></a>
                
            </div>
        </div>       
</body>
</html>
