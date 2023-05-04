<!Doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <?php include("database.php") ?>
        <title>Hawg'N Store It</title>
        <script src="main.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/review.css?v=<?php echo time(); ?>"></link>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    </head>
    <body>
    <?php include("menu.php")?>
        <div class="main_container container-fluid">
        <div class="menu_container">
       
</div>
<h1 class="main-text">Reviews</h1>
        <div class="body_container">
      
      
        
        <div class="grid">
   
            <!--- Do a function that generates one each time a comment is added to the database-->
          <?php 
          
          $sql2="SELECT * FROM reviews";
          $result2=$connect->query($sql2);
       
          while($row2 = $result2->fetch_assoc())
          {
       
          
      
          
          echo '<div class="comment_container">';
                echo ' <div class="name">';
                echo $row2['renter']."<br>";
               echo '</div>';
               echo '<div>';
               echo '<p class="unit_">';
               echo "Unit Number: ";
               echo $row2['unit_no']."<br>";
               echo '</p>';
               echo '</div>';
               echo"<div class='text-comment'>";
                 echo'<p >';
                 echo $row2['review']."<br>";
		            echo '</p>';
                  echo"</div>";
                  echo '</div>';
                
	
   }
            ?>

            </div>
          
       </div>
       <center>
<h1 class="add-c">Add a Coment</h1>
	
	<form name="rent-request" method="POST" action="add_review_process.php">
	<table class="form">
	<tr>
	<td>Enter your Name: </td> <td><input type+"text" name="renter"placeholder="Jane Doe" id="renter" required/></td>
	</tr> 
	<tr>
	<td>Enter the Unit you rented: </td> <td><input type+"text" placeholder ="ex. 2"name="unit" id="unit" required/></td>
	</tr> 
	<tr>
	<td>Enter your review: </td>
	</tr>
	<tr>
	<td colspan=2><textarea id="review" name="review" required rows="4" cols="50"></textarea></td>
	</tr>
	<tr>
	<td align="center" colspan=2> <input type="submit"class="review-button" value="Enter Review"/> </td>
	</tr>
	</table>
	</form>
	</center>
        </div>
        </div>
</div>
    </body>
</html>
