# HawgN-Store-It
## Requirements
As it is a local page it requires to have the database files, it also works better on Chrome.
WAMPSERVER or XAMPSERVER

## Project Notes
The project was designed for the Web Applications class, and has not been launched yet.

## Setup
!important  
Files should be saved in Wampserver www folder, under folder project_webpage.    
The Branch master contains the node_modules, all the files should be downloaded and put in a folder with the same name.  
All the files should go inside this folder.  
The folders for img, css and js should be kept with those names when the project is cloned.  
The rest of the files from the other folders, should be extracted from them and placed in the project_webpage directory.  

## Front-end Compiling
The project must be open on visual studios and a SASS/SCSS compiler must be downloaded in order to compile the SCSS files.

## Files & directories
```bash 
project_webpage   
        |   
        ___  contact.php //Contains the contact page    
        │   database.php //Is the connection to the database file   
        │   Footer.php  //Contains the footer use for the admin page, with the users information   
        │   index_.php   //Connects to the main page, has an iframe and is mostly css   
        │   main.php     //This is the main page to which the user is redirected from index_.php   
        │   menu.php    //This contains the menu bar included in all the user page pages   
        │   menu_bar.php  //Contains the menu page      
        │   package-lock.json //Holds the scss files    
        │   package.json        
        │   rental_form.php //This files constains the rental form to which the user is redirected after hitting the reserve button.    
        │      
        ├───Admin   //Admin page related files, CMS             
        │       Accept.php   //PHP accept button process              
        │       admin.php   //Login_page and how the user accesses the CMS          
        │       Decline.php  //PHP decline button process          
        │       Delete.php   //PHP delete button process         
        │       Logout_process.php  //PHP logout process returns the user to the admin.php           
        │       Manage_request.php   //The page accessed after loging in             
        │       VerifyCheck.php     //Validates the user credentials in order to access the page              
        │
        ├───css            //Contains the css files, some of them are the css maps of the scss  
        │       admin.css   //admin.php         
        │       contact.css          
        │       contact.css.map         
        │       contact.scss      
        │       index.css            
        │       main.css                
        │       main.css.map       
        │       main.scss             
        │       menu.css              
        │       menu.css.map    
        │       menu_bar.css    
        │       menu_bar.css.map        
        │       menu_bar.scss   
        │       overview.css  //manage-request.php css file     
        │       Rental_form.css         
        │       Rental_form.css.map     
        │       rental_form.scss        
        │       Request_Process.css     
        │       Reserve.css        
        │       Reserve.css.map         
        │       Reserve.scss    
        │       review.css      
        │
        ├───img    //Contains the images        
        │       experimental-something-went-wrong.png  //Main page image        
        │       icons8-phone-150.png      
        │       icons8-surface-250.png          
        │       icons8-x-96.png         
        │       isometric-three-lines (1).svg   
        │       noun-menu-3103159.png       //Menu page icon    
        │
        ├───js              
        │       index.js    //contains the code for the index slide     
        │       main.js      //Contains the menu animation for the menu icons, and the change    
        │
        ├───Review
        │       add_review_process.php   //The php process to add reviews to the database              
        │       review.php               //The php review page in where the reviews are displayed       
        │
        └───Unit                    //Unit reservation file     
                Request.php             
                Request_Process.php     
                Reserve.php     
                Unit.php        

```

When:  3/5/2023

Database: No changes have been made.

## Design Notes
-For admin page use 
pass: pass
user: mriley

## Credits
Maria Galindo and Mason Zelinski
