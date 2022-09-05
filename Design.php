<?php require_once "controllerUserData.php"; ?>
<?php 
//session_start();
if (!isset($_SESSION['email']))
{
  header("location:login-user.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Department</title>
</head>

<style>



* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0; background-color: green;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}



li.dropdown {
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: orange;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {background-color:purple}

.dropdown:hover .dropdown-content {
  display: block;
}




.mySlides {display: none}
img {vertical-align: middle;
    max-width: 100%;
    max-height: 50%;
    position:fixed;
    
    margin-top: 0px;
    
}

.slideshow-container {
  max-width: 100%;
  position:inherit;
  
}



</style>

<body>
    
    <h1 style="color: yellow; text-align: center; margin: 0px;"> Design Department <br>
        New Ganga Bridge Project, Patna
        </h1>
        
        
        
            <ul>
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="#news">News</a></li>
            
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">Drawings</a>
                  <div class="dropdown-content">
                    <a href="Design Members.php">Design Members </a>
                    <a href="#">South Viaduct Drawings</a>
                    <a href="#">Main Bridge Drawings</a>
                   
                    <a href="form.html">Application Form</a>
        
                  </div>
                </li>
            
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
              </ul>
                        
            
                <div class="slideshow-container">
            
                      <div class="mySlides fade">
                      <img src="Images/01.jpg.jpg" style="width:100%">
                      </div>
                      <div class="mySlides fade">
                      <img src="Images/02.jpg.jpg" style="width:100%">
                      </div>
                      <div class="mySlides fade">
                      <img src="Images/03.jpg.jpg" style="width:100%">
                      </div>
                      <div class="mySlides fade">
                        <img src="Images/04.jpg.jpg" style="width:100%">
                      </div>
                      <div class="mySlides fade">
                        <img src="Images/05.jpg.jpg" style="width:100%">
                       </div>
                        <div class="mySlides fade">
                        <img src="Images/06.jpg.jpg" style="width:100%">
                        </div>
                        
            
  
                    
                </div>
                    <br>
                    
                    <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span>
                      <span class="dot" onclick="currentSlide(4)"></span>
                      <span class="dot" onclick="currentSlide(5)"></span>
                      <span class="dot" onclick="currentSlide(6)"></span>
                     
                      
                    </div>
                    
        
        
        
            
            <script>
                var myIndex = 0;
                carousel();
                
                function carousel() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 2000); // Change image every 2 seconds
                }
                </script>
        
        



</body>
</html>
