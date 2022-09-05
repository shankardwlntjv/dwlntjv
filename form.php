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
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>

* {
  box-sizing: border-box;
}
body{
    background-color: bisque;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

        
        
a {
  text-decoration: none;
  display: inline-block;
  padding: 10px 20px;
}  
          

a:hover {
  background-color: orange;
  color: black;
}


.previous {
  background-color: purple;
  color:white;
}

.next {
  background-color: brown;
  color: white;
}

.round {
  border-radius: 50%;
}
       
        
        
        
    </style>
</head>
<body>
    <h2>Enquiry Form</h2>
    <p>Enquiry Message , New Ganga Bridge Project, Patna, Bihar</p>
    
    <div class="container">
      <form action="POST" autocomplete="off" name="google-sheet">
      
          <div class="row">
          <div class="col-25">
          <label for="fname">First Name</label>
          </div>
          <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          </div>
          </div>



           <div class="row">
           <div class="col-25">
           <label for="mname">Middle Name</label>
           </div>
           <div class="col-75">
           <input type="text" id="mname" name="middle name" placeholder="Your middle name..">
            </div>
           </div>


           <div class="row">
            <div class="col-25">
            <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
             </div>
            </div>


            <div class="row">
                <div class="col-25">
                <label for="ename">Email</label>
                </div>
                <div class="col-75">
                <input type="text" id="ename" name="emailname" placeholder="Your email name..">
                 </div>
                </div>

            <div class="row">
                    <div class="col-25">
                    <label for="mnnumber">Mobile Number</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="mmumber" name="Mobilename" placeholder="Your Mobile name..">
                     </div>
                    </div>

       
            <div class="row">
                    <div class="col-25">
                        <label for="sname">State Name</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="sname" name="statename" placeholder="Your state name..">
                         </div>
                        </div>







           <div class="row">
           <div class="col-25">
           <label for="country">Country</label>
           </div>
            <div class="col-75">
           <select id="country" name="country">
            <option value="India">India</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Srilanka">Srilanka</option>
            </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        </div>
      </div>
      <br>
      <div class="row">
        <input type="submit" value="Submit" name="submit">
      </div>
      </form>
     <span id="msg"> </span>   
        
    </div>
   
    
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxKIH2y0Bq1js4RTSREE-VlcFdHdekI4XIx0DqKO9Wk3ze1o4E7USGVACxSAKh7fH8/exec'
         const form = document.forms['google-sheet']
       const msg = document.getElementById("msg")
        
         form.addEventListener('submit', e => {
           e.preventDefault()
           fetch(scriptURL, { method: 'POST', body: new FormData(form)})
             .then(response => {
             msg.innerHTML= "Thanks for Contacting us..! We Will Contact You Soon..."
             setTimeout(function(){
              msg.innerHTML= ""
             },1000)
             form.reset()
             })
             .catch(error => console.error('Error!', error.message))
         })
      
         
         
         
       </script>
 
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
 
     <a href="HR Department.php" class="previous">&laquo; Previous</a>
     <a href="#" class="next">Next &raquo;</a>
     
     <a href=".html" class="previous round">&#8249;</a>
     <a href="#" class="next round">&#8250;</a>
   
   




</body>
</html>
