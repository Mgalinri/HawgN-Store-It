<!Doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <title>Hawg'N Store It</title>
        <?php include("database.php") ?>
      <?php session_start(); ?>
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/Reserve.css"></link>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    </head>
    <body >
    <?php include("menu.php") ?>
       <div class="container-fluid">
       <div class="menu_container">
       
</div>
            
           <h1 class="main-text">Reserve</h1>
           <div class="size-guide container-md">
            <div class="size-1 size-container">
            <div class="container-info">
            <h1 class="container-text">20' x 30' Unit</h1>
            </div>
                <div class="container-image"><img src="img\icons8-surface-250.png" alt="5x5 container"></img></div>
                <div class="container-info-2">
<div>
                    <p class="info-text">Our 20x30 unit, which measures 600 sq ft, offers storage space equivalent to that of a two-car garages.</p>
</div>
<?php $sql2="SELECT * FROM unit_tab WHERE availability=1 AND cost=65 LIMIT 1";
	$result2=$connect->query($sql2);
    $element;
    while($row2 = $result2->fetch_assoc())
    {
        $element =$row2['unit_no'];
    }
    $result2 = mysqli_num_rows($result2);
    if($result2!=0){
       echo "<button class=\"reserve-button\" onclick=\"window.location.href='rental_form.php?cost=65&unit=".$element."'\">Reserve</button>";
    }
    else{
      echo "<button class=\"reserve-button\" onclick=\"alert('No more units are available');\">Reserve</button>";
    }
    ?>              
                </div>
               
           </div>
           <div class="size-2 size-container">
          <div class="container-info">
            <h1 class="container-text">10' x 20' Unit</h1>
            </div>
                <div class="container-image"><img src="img\icons8-surface-250.png" alt="5x5 container"></img></div>
                
                <div class="container-info-2">
                  <div>
                    <p class="info-text">
Our 10x20 unit, with 200 sq ft of storage space, is equivalent to the size of a one-car garage, providing ample room to store furniture, appliances. </p>
</div>
<?php $sql2="SELECT * FROM unit_tab WHERE availability=1 AND cost=40 LIMIT 1";
	$result2=$connect->query($sql2);
    $element;
    while($row2 = $result2->fetch_assoc())
    {
        $element =$row2['unit_no'];
    }
    $result2 = mysqli_num_rows($result2);
    if($result2!=0){
       echo "<button class=\"reserve-button\" onclick=\"window.location.href='rental_form.php?cost=40&unit=".$element."'\">Reserve</button>";
    }
    else{
      echo "<button class=\"reserve-button\" onclick=\"alert('No more units are available');\">Reserve</button>";
    }
   
    ?>
                </div>
                
           </div>
           </div>
           </div>
           
  
       
</div>

     </div>
   
    </body>
</html>