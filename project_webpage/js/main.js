
window.onscroll= function(){

   var woff=window.pageYOffset;
   var box_1=document.getElementById("box_1").getBoundingClientRect().y;
   var box_2 =document.getElementById("box_2").getBoundingClientRect().y;
   var box_3 = document.getElementById("box_3").getBoundingClientRect().y;
   var box_4 = document.getElementById("box_4").getBoundingClientRect().y;

   
   if(woff>box_1-300 && woff<box_2)
   {
    document.body.style.backgroundColor="#ffd23f";
    
   }
   else if( woff>box_2  && woff<box_3+300)
   {
    document.body.style.backgroundColor="white";
   }
   else if(woff>box_3+600 && woff<box_4+1000)
   {
    document.body.style.backgroundColor="#ffd23f";
    
   }
   else if( woff>box_4 )
   {
    document.body.style.backgroundColor="white";
   }
   

}

