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
            <td class="tg-0lax">1</td>
            <td class="tg-0lax">Mr Jeong Dae An</td>
            <td class="tg-0lax">Head of Division</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">926299929</td>
          </tr>
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Mr Anand Krishna</td>
            <td class="tg-0lax">Deputy head</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8789803023</td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr Tapan Panda</td>
            <td class="tg-0lax">Planning Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9552558090</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Vikas singh kushwaha</td>
            <td class="tg-0lax">QS Billing</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9140405757</td>
          </tr>
          <tr>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax">Mr Santosh Kumar</td>
            <td class="tg-0lax">Asst. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7091268400</td>
          </tr>
          <tr>
            <td class="tg-0lax">6</td>
            <td class="tg-0lax">Mr. Syed Md Ali Ashraf</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8527462919</td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">Mr. Kushagra Gupta</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9451309755</td>
          </tr>
          <tr>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">Mr. Dheerendra Gupta</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9755075885</td>
          </tr>
          <tr>
            <td class="tg-0lax">9</td>
            <td class="tg-0lax">Mr. Atanu Dalpati</td>
            <td class="tg-0lax">Engineer-QS Billing</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7980972201</td>
          </tr>
          <tr>
            <td class="tg-0lax">10</td>
            <td class="tg-0lax">Mr. Santosh Kumar Singh</td>
            <td class="tg-0lax">Assistant - Planning</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8707487219</td>
          </tr>
          <tr>
            <td class="tg-0lax">11</td>
            <td class="tg-0lax">Mr. Uma Shankar Gupta</td>
            <td class="tg-0lax">Assistant - Planning</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8009175555</td>
          </tr>
          <tr>
            <td class="tg-0lax">12</td>
            <td class="tg-0lax">Mr. Sumo</td>
            <td class="tg-0lax">Engineer-QS Billing</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7988745367</td>
          </tr>
          <tr>
            <td class="tg-0lax">13</td>
            <td class="tg-0lax">Mr. Syed Zeeshan Haider</td>
            <td class="tg-0lax">Engineer - Planning</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9632921016</td>
          </tr>
          <tr>
            <td class="tg-0lax">14</td>
            <td class="tg-0lax">Mr. Amjad Imam</td>
            <td class="tg-0lax">Office Assistant</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">6203724509</td>
          </tr>
          <tr>
            <td class="tg-0lax">15</td>
            <td class="tg-0lax">Mr. Somil Jha</td>
            <td class="tg-0lax">Asst. Document Controller</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7909057248</td>
          </tr>
  
  
  
  
        </table>   
  
        <a href="Planning Department.php" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>