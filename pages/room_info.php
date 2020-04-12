    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href = "/styles/rooms_styles.css">
        <title>Rooms</title>
    </head>
    <header>
        <div class="dropdown">
      <a href = "">Menu</a>
      <div class="dropdown-content">
        <a href = "start_page">Start page</a>
        <a href = "project">Project</a>
        <a href = "tables">Tables</a>
        </div>
        </div>
    </header>   

    <body>
    <div class = "wrapper">
        
         <h1><? echo $roomDetailedInfo['room_name']; ?> </h1>
        <div align="center">
        <?php echo '<img src = "' .  "../../images/" . $roomDetailedInfo['picture_name'] . '" ' . 'height="400" width="600">'?>
        </div>
        
        
        <? echo $roomDetailedInfo['room_description'];?>
        <div style = "font-size:23px">
        <br>
        Кількість датчиків в кімнаті: <? echo $roomDetailedInfo['amount_of_sensors'];?>,
        <br>
        Кількість розеток в кімнаті: <? echo $roomDetailedInfo['amount_of_sockets'];?>,
        <br>
        Площа кімнати: <? echo $roomDetailedInfo['square'];?> м².
        </div>

        <div align="right">
        <a href = "../rooms">Повернутися</a>
        </div>

        
    </div>

    </body>

    <footer>
    <div class = "footer_copyrights">Байда Владислав, РА-171</div>
    <br>
    <a href = "start_page">Start page</a> <br>
    <a href = "project">About project</a> <br>
    <a href = "tables"> Tables</a>
    </footer>
    </html>