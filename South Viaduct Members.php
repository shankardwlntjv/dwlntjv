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
            <th class="tg-0lax">Mr. Ganesan Ramu</th>
            <th class="tg-0lax">Head of Division</th>
            <th class="tg-0lax"></th>
            <th class="tg-0lax">7603079812</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Mr. PC Srivastava</td>
            <td class="tg-0lax">Manager-Erection</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8084145563</td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr. S.Parthipan</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8122426320</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Raj Kumar</td>
            <td class="tg-0lax">Jr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9990588987</td>
          </tr>
          <tr>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax">Mr. Pankaj kr.Suman</td>
            <td class="tg-0lax">Jr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9431694429</td>
          </tr>
          <tr>
            <td class="tg-0lax">6</td>
            <td class="tg-0lax">Mr. Anurag Bimal</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8789448695</td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">Mr. Pranay Kumar</td>
            <td class="tg-0lax">GET-Civil</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7061077715</td>
          </tr>
          <tr>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">Mr. Dullichand Namdeo</td>
            <td class="tg-0lax">Site Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7798466498</td>
          </tr>
          <tr>
            <td class="tg-0lax">9</td>
            <td class="tg-0lax">Mr. Shivam Gupta</td>
            <td class="tg-0lax">DET</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">10</td>
            <td class="tg-0lax">Mr Abhijit Guin</td>
            <td class="tg-0lax">Asst. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7728087685</td>
          </tr>
          <tr>
            <td class="tg-0lax">11</td>
            <td class="tg-0lax">Mr. P. Ajay Kumar</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9040429610</td>
          </tr>
          <tr>
            <td class="tg-0lax">12</td>
            <td class="tg-0lax">Mr. Ashwini Gopal</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">13</td>
            <td class="tg-0lax">Mr. P.S.N Murthy</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9618558475</td>
          </tr>
          <tr>
            <td class="tg-0lax">14</td>
            <td class="tg-0lax">Mr. Jagan Singh Sisodiya</td>
            <td class="tg-0lax">Asst. Supervisor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9167317824</td>
          </tr>
          <tr>
            <td class="tg-0lax">15</td>
            <td class="tg-0lax">Mr. Arif Hassan Sk</td>
            <td class="tg-0lax">Asst.Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8768309994</td>
          </tr>
          <tr>
            <td class="tg-0lax">16</td>
            <td class="tg-0lax">Mr. Vinesh Ray</td>
            <td class="tg-0lax">Foreman Civil</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7870024384</td>
          </tr>
          <tr>
            <td class="tg-0lax">17</td>
            <td class="tg-0lax">Mr. SUMIT KHORE</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
         
  
  
  
  
  
        </table>   
  
        <a href="Design.html" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>