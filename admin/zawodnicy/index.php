<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biegniemy, by pomagać</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <link rel="shortcut icon" type="image/png" href="/strona/img/logo-bez-dolu.png"/>    
    <script src="https://kit.fontawesome.com/3e6ad510db.js" crossorigin="anonymous"></script> 
</head>

    <header class="header">
		<div class="logo"><a href="/"><img src="/strona/img/cale-logo.png" style="width:200px;height:100px;border-radius: 5px;box-shadow: 0 0 10px 10px white;"></a></div>
      <ul class="main-nav">        
        <li><a href="/admin/zawodnicy">Zawodnicy</a></li>
        <li><a href="/admin/rekru">Rekrutacja</a></li>
        <li><a href="/admin">Lista</a></li>
        <li><a href="/admin/mail">Mail</a></li>
      </ul>
	</header>     
    <body>  
        <div class="title">
            <h1>LISTA ZWERYFIKOWANYCH ZAWODNIKÓW</h1>
        </div>
            <div class="up">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <select name="sort" type="hidden">
                    <option name="id" value="id">ID</option>
                    <option name="imie" value="imie">Imię</option>
                    <option name="nazwisko">Nazwisko</option>                    
                </select>
                    <button name="ASC" type="hidden">Rosnąco</button>
                    <button name="DESC" type="hidden">Malejąco</button>
                </form>
            </div>
            <div class="down">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>E-mail</th>  
                        <th></th>                                          
                    </tr>
                <?php
                    function query($query)
                    {
                        $connect = mysqli_connect('localhost', 'u235805072_bembol', 'B3mbol123!', 'u235805072_bieg');
                        $result = mysqli_query($connect, $query);                        
                        return $result;
                    }
                    function results($row)
                    {
                        echo"
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['imie']."</td>
                            <td>".$row['nazwisko']."</td>
                            <td>".$row['email']."</td> 
                            <td class='accept'>
                                <form action='index.php' method='POST' id='myForm'>                                
                                    <input type='hidden' name='id' value=" . $row['id'] . ">
                                    <button class='nie'name='nie'>Usuń</button>
                                </form>
                            </td>                                                
                        </tr>";
                    }
                    if(isset($_POST['ASC'])){
                         $asd = $_POST['sort'];
                         $que = "SELECT * FROM zawodnicy WHERE accept = 1 ORDER BY " . $asd . "";
                         $result = query($que);
                         while ($row = mysqli_fetch_assoc($result) ){
                            results($row);
                    }
                }
                    elseif(isset($_POST['DESC'])){
                         $asd = $_POST['sort'];
                         $que = "SELECT * FROM zawodnicy WHERE accept = 1 ORDER BY " . $asd . " DESC";
                         $result = query($que);   
                         while ($row = mysqli_fetch_assoc($result) ){
                            results($row);
                    }}
                    else{
                         $que = "SELECT * FROM zawodnicy WHERE accept = 1";
                         $result = query($que);         
                         while ($row = mysqli_fetch_assoc($result) ){
                            results($row);
                    }}
                    if(isset($_POST['nie'] ) ) {
                        $qe = "DELETE FROM zawodnicy WHERE `zawodnicy`.`id` = " . $_POST['id'] . "";
                        $result1 = query($qe);
                    }
                     
                 ?>
            </div>            
            
    </body>
</html>
