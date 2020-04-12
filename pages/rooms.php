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
    
    <?php foreach ($roomsInfo as $roomsItem) :?>
    
    <div class = "info_block">
    <h1><a href = <?php echo '../rooms/' . $roomsItem['room_id']?> > <?php echo $roomsItem['room_name'];?></a></h1>
    <div class = "main_text"><?php echo $roomsItem['short_description'];?></div>

    <?php echo '<img src = "' . "../images/" . $roomsItem['picture_name'] . '" ' . 'height="400" width="600">'?>
     </div>




 <?php endforeach;?>

    
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