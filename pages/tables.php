<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tables</title>
    <link rel = "stylesheet" href = "/styles/tables.css">
</head>
<header>
     <div class="dropdown">
  <a href = "">Menu</a>
  <div class="dropdown-content">
    <a href = "start_page">Start page</a>
    <a href = "project">Project</a>
    <a href = "rooms">Rooms</a>
    </div>
    </div> 
</header>
<body>
    <div class = "wrapper">
       <div class = "info_block">
       <h1>Оберіть кімнату і дату, для якої ви хочете вивести дані</h1>
       <form name="Filter" method="POST">
       <input type="date" name="DATE" >
       <input type="text" name="room_name">
       <br>
       <input type="submit" name="submit" value = "Показати дані">
       </form>
        
        <table> 
      <tr>
          <td>Час</td>
          <?php foreach ($temperatureInfo as $tempItem):?>
          <td><?=$tempItem['time']?></td>
        <?php endforeach; ?>
      </tr>
      <tr>
          <td>Темп.</td>
          <?php foreach ($temperatureInfo as $tempItem):?>
          <td><?=$tempItem['temperature']?></td>
        <?php endforeach; ?>
        </table>
       
        
        </div>
    </div>
</body>
<footer>
    <div class = "footer_copyrights">Байда Владислав, РА-171</div>
<br>
<a href = "start_page">Start page</a> <br>
<a href = "project">About project</a> <br>
<a href = "rooms">Rooms</a>
</footer>
</html>