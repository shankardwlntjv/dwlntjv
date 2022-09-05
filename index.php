<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: skyblue;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: black;
        font-size: 40px!important;
        font-weight: 500;
    }
    button a{
        color: red;
        font-weight: 500;
        
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar">
    <a class="navbar-brand" href="#">Daewoo-Larsen and Toubro Limited Joint Venture</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <h1>Welcome <?php echo $fetch_info['name'] ?></h1>



    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

    
    
</body>
</html>







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

<h1>Daewoo-Larsen and Tourbo Limited Joint Venture  
<br>
<h2> <marquee> New Ganga Bridge Project, Patna . This website is created by Mr. Shankar Prasad Singh </marquee> </h2> </h1>


    <div class="navbar">
        <a href="#Home"> Home </a>
        <a href="Notification"> Notification</a>

        <div class="dropdown">
          <button class="dropbtn">Department▾ 
          
             <i class="fa fa-caret-down "></i>
          
         </button>


         <div class="dropdown-content">
          <a href="Admin.html"> Administrative Department</a>
          <a href="Design.html">Design Department</a>
          <a href="Procurement.html">Procurement Department</a>
          <a href="HR Department.html">Human and Resource Department</a>
          
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
