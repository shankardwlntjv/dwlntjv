<?php
include ('controllerUserData.php');

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
    <title>Admin Members</title>
    <style>
body{
            background-color: seashell;
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
        New Ganga Bridge Project, Patna, Bihar  </h1>
       <h2>  <u> Members List of Administrative Department </u> </h2>
      
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
            <td>Mr. R K Singh</td>
            <td>Head of Division</td>
            <td> </td>
            <td>8755460799</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Mr. Binay Kumar Dubey</td>
            <td>IR Manager</td>
            <td></td>
            <td>7065564804</td>
          </tr>
  
          <tr>
              <td>3</td>
              <td>Mr. Manish Vardhan</td>
              <td>Asst. Manager IR</td>
              <td> </td>
              <td>7518022522</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Mr. Mani Ram Bardoloi</td>
              <td>Asst. Manager IR</td>
              <td> </td>
              <td>9920582081</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Mr. Jay Prakash Gupta</td>
              <td>Executive IR</td>
              <td> </td>
              <td>9717462256</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Mr. Sunil Negi</td>
              <td>Admin Assist</td>
              <td> </td>
              <td>7574817663</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Mr. Santosh Kumar</td>
              <td>Executive - IR</td>
              <td> </td>
              <td>9911864201</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Mr. Rajendra Singh</td>
              <td>Assistant IR/Admin</td>
              <td> </td>
              <td>9871719965</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Mr. Sarvesh Chandra</td>
              <td>Asst. Admin</td>
              <td> </td>
              <td>9304701006</td>
            </tr>
            <tr>
              <td>10</td>
              <td>Mr. Md. Tajmul</td>
              <td>Asst. Manager</td>
              <td> </td>
              <td>9835536947</td>
            </tr>
  
  
  
  
  
  
        </table>   
  
        <a href="Admin.php" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href="Admin.php" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


</body>
</html>