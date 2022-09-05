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
    <title>Design Members</title>
<style>


body{
            background-color: rgb(179, 216, 179);
        }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  
}

h1{
  text-align: center;
  color: red;
}
h2{
  text-align: center;
  color:black;
}



table {
  width: 100%;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}


</style>

</head>
<body>
    <h1>
       <marquee> New Ganga Bridge Project, Patna, Bihar  </marquee> </h1>
       <h2 style="color:darkblue"> <u> Members List of Design Department </u> </h2>
      
      <table>
 

        <tr>

          <th style="width:2%">Si. No.</th>
          <th style="width:35%">Name</th>
          <th>Designation</th>
          <th>Email Address</th>
          <th style="width:15%">Contact Number</th>
        </tr>     


         
          <tr>
            <td>1</td>
            <td>Mr. Mukesh Kumar Singh</td>
            <td>Head of Division</td>
            <td> </td>
            <td>7827052283</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Mr. Dharanedharan K S</td>
            <td>Design Engineer</td>
            <td> </td>
            <td> </td>
          </tr>
  
          <tr>
              <td>3</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>4</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>5</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>6</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>7</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>8</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>9</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td>10</td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
  
  
  
  
  
  
        </table>   
  
        <a href="Design.html" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>