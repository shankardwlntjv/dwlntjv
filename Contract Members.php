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
            <th class="tg-0lax">1</th>
            <th class="tg-0lax">Mr. Paul Brady</th>
            <th class="tg-0lax">Head of Division</th>
            <th class="tg-0lax"></th>
            <th class="tg-0lax">7485805650</th>
          </tr>
        
        
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Mr. V.N.Ramakkrishnan</td>
            <td class="tg-0lax">Sr. Manager {Contracts}</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9790288140</td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr. Satyendra Pratap Singh</td>
            <td class="tg-0lax">Manager {Contracts}</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7570005008</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Shankar Prasad Singh</td>
            <td class="tg-0lax">Asst. Document Controller</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9835491577</td>
          </tr>
         
          
  
  
  
  
        </table>   
  
        <a href="Design.html" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>