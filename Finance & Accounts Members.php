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
            <th class="tg-0lax">Mr. A k Mohapatra</th>
            <th class="tg-0lax">Head of Division</th>
            <th class="tg-0lax"></th>
            <th class="tg-0lax"></th>
          </tr>
        
        
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Mr. Hyun Ho Shin</td>
            <td class="tg-0lax">Deputy Head</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr. Indraneel Ghosh</td>
            <td class="tg-0lax">Assistant Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7044000222</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Jaskaran Singh</td>
            <td class="tg-0lax">Assistant Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7209669575</td>
          </tr>
          <tr>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax">Mr. Pankaj Kumar Gupta</td>
            <td class="tg-0lax">Dy. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">6</td>
            <td class="tg-0lax">Mr. Somala Prasanna Kumar</td>
            <td class="tg-0lax">Accounts Officer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">Mr. Amir Abbas</td>
            <td class="tg-0lax">Accounts Officer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">Mr. Kuldeep Raj</td>
            <td class="tg-0lax">Document Controller</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9971183986</td>
          </tr>
          <tr>
            <td class="tg-0lax">9</td>
            <td class="tg-0lax">Mr. Deepak Mishra</td>
            <td class="tg-0lax">Executive-Accounts</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9304489601</td>
          </tr>
          <tr>
            <td class="tg-0lax">10</td>
            <td class="tg-0lax">Mr. Tabish Ali</td>
            <td class="tg-0lax">Executive - Accounts</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7903280368</td>
          </tr>
          <tr>
            <td class="tg-0lax">11</td>
            <td class="tg-0lax">Mr. Kumar Biswatanu Dalapati</td>
            <td class="tg-0lax">Accounts Assistant</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9304489601</td>
          </tr>
         
  
  
  
  
  
        </table>   
  
        <a href="Finance & Accounts Department.php" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>