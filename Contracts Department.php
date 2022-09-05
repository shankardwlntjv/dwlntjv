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
    <title>DWLNTJV</title>
<style>

*{
  margin:0px;
  Padding:0px;
box-sizing: border-box;

}


.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
  margin-top: 0px;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
body{
    background-image: url("Images/7.jpg.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover; 
}


h1{
background-color: yellow;
text-align: center;

}

h2{
  background-color:salmon;
  text-align: center;
  color:darkblue;
  
}


.slide-container .prev,
.slide-container .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: all 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.slide-container .prev:hover,
.slide-container .next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color: white;
}

.slide-container .prev {
  left: 2px;
}

.slide-container .next {
  right: 2px;
}

.dots-container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
}

.dots-container .dot {
  cursor: pointer;
  margin: 5px;
  width: 20px;
  height: 20px;
  color: #333;
  border-radius: 50%;
  background-color: #dfd6ce;
}

.dots-container .dot.active {
  border: 2px solid green;
}

* {
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

body {
  height: 100%;
/*   background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%); */
}

body h1 {
  text-align: center;
}

.slide-container {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 1000px;
  margin: auto;
  position: relative;
}

.slide-container .slide {
  display: none;
  width: 100%;
  
}

.slide-container .slide.fade {
  animation: fade 0.5s cubic-bezier(0.55, 0.085, 0.68, 0.53 , 0.46, 0.75) both;
}

.slide-container .slide img {
  width: 100%;
}






</style>



</head>
<body>

<h1> Contracts Department  
<br>
<h2> <marquee> New Ganga Bridge Project, Patna . This website is created by Mr. Shankar Prasad Singh </marquee> </h2> </h1>


    <div class="navbar">
        <a href="home.php"> Home </a>
        <a href="Notification"> Notification</a>

        <div class="dropdown">
          <button class="dropbtn">Department▾ 
          
             <i class="fa fa-caret-down "></i>
          
         </button>


         <div class="dropdown-content">
          <a href="Admin.html"> Admin Department</a>
          
          </div>
      
      </div>


        <a href="Location"> About</a>
        <div class="dropdown">
         <button class="dropbtn">Location▾ 
         
            <i class="fa fa-caret-down "></i>
         
        </button>
        
        
        
           <div class="dropdown-content">
            <a href="#">Zero Point</a>
            <a href="#">South Precast Yard</a>
            <a href="#">South Viaduct</a>
            <a href="#">Fabrication Yard </a>
            <a href="#">Main Bridge</a>
            <a href="#">North Viaduct</a>
            <a href="#">Store</a>
            
            </div>
        
        </div>
            
     </div>
        
    <div class="slide-container">
      <div class="slide fade">
      
        <img src="Images/01.jpg.jpg" alt=''>
       
      </div>
      <div class="slide fade">
        
        <img src="Images/02.jpg.jpg" alt=''>
        
      </div>
      <div class="slide fade">
        
        <img src="Images/03.jpg.jpg" alt=''>
        
      </div>
      <div class="slide fade">
        
        <img src="Images/04.jpg.jpg" alt=''>
        
      </div>
      <div class="slide fade">
        
        <img src="Images/05.jpg.jpg" alt=''>
        
      </div>
      <div class="slide fade">
        
        <img src="Images/06.jpg.jpg" alt=''>
        
      </div> 


   


      <a href="#" class="prev" title="Previous">&#10094</a>
      <a href="#" class="next" title="Next">&#10095</a>
    </div>
    <div class="dots-container">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>


    </div>
<script>

    let currentSlide = 0;
    const slides = document.querySelectorAll(".slide")
    const dots = document.querySelectorAll('.dot')
    
    const init = (n) => {
      slides.forEach((slide, index) => {
        slide.style.display = "none"
        dots.forEach((dot, index) => {
          dot.classList.remove("active")
        })
      })
      slides[n].style.display = "block"
      dots[n].classList.add("active")
    }
    document.addEventListener("DOMContentLoaded", init(currentSlide))
    const next = () => {
      currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
      init(currentSlide)
    }
    
    const prev = () => {
      currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
      init(currentSlide)
    }
    
    document.querySelector(".next").addEventListener('click', next)
    
    document.querySelector(".prev").addEventListener('click', prev)
    
    
    setInterval(() => {
      next()
    }, 2000);
    
    dots.forEach((dot, i) => {
      dot.addEventListener("click", () => {
        console.log(currentSlide)
        init(i)
        currentSlide = i
      })
    })
    
</script>



  
    
</body>
</html>
