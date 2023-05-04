<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css\index.css"></link>
        <script src="index.js"></script>
        <title>Hawg'N Store It - Home</title>
    </head>
    <body onload="roll_up()">
       <div class="main_container">
         <div class="shadow">

         </div>
       </div>
       <div class="roll_up_container">
       <div class="side left">
        </div>
    <div class="outside_container">
        <iframe src="main.php" class="frame"></iframe>
        <div class="roll_up_inside_container" id="roll_up"  >
            
            <div class="roll_up" id="first">
           
        </div>
        <div>
            
        </div>
        <div class="roll_up">

        </div>
        <div class="roll_up">

        </div>
        </div>
    </div>
        <div class="side right" >
        </div>
        <script>
            document.getElementById("first").addEventListener("animationend",()=>
                {
                    window.open("main.php",'_self');
                });
        </script>
        
    </div>
    </body>
</html>