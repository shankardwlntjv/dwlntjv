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
            <th class="tg-0lax">Mr. K. P. Raju</th>
            <th class="tg-0lax">Head of Division</th>
            <th class="tg-0lax"></th>
            <th class="tg-0lax">9121837239</th>
          </tr>
        
        
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Mr. Pankaj Kumar</td>
            <td class="tg-0lax">Sr. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9078079755</td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr. Sabyasachi Bahaduri</td>
            <td class="tg-0lax">Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9674168726</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Arshad Mahmood</td>
            <td class="tg-0lax">Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9589610801</td>
          </tr>
          <tr>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax">Mr. Sanjeev Chaudhary</td>
            <td class="tg-0lax">Asst. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8700750493</td>
          </tr>
          <tr>
            <td class="tg-0lax">6</td>
            <td class="tg-0lax">Mr. Harish Belliraj</td>
            <td class="tg-0lax">Sr, Engineer QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9597344567</td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">Mr. Sachin Kumar Singh</td>
            <td class="tg-0lax">QC Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9795504676</td>
          </tr>
          <tr>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">Mr. Pankaj kumar</td>
            <td class="tg-0lax">Engineer-QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9873998038</td>
          </tr>
          <tr>
            <td class="tg-0lax">9</td>
            <td class="tg-0lax">Mr. Ashwani Kumar</td>
            <td class="tg-0lax">Sr, Engineer QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8790450599</td>
          </tr>
          <tr>
            <td class="tg-0lax">10</td>
            <td class="tg-0lax">Mr. Prem Nath Tiwari</td>
            <td class="tg-0lax">QA/QC Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9580447016</td>
          </tr>
          <tr>
            <td class="tg-0lax">11</td>
            <td class="tg-0lax">Mr. Akhilesh Kumar Singh</td>
            <td class="tg-0lax">Lab Tech - QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7368095377</td>
          </tr>
          <tr>
            <td class="tg-0lax">12</td>
            <td class="tg-0lax">Mr Dilip Kumar Patra</td>
            <td class="tg-0lax">QA/QC Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8696913019</td>
          </tr>
          <tr>
            <td class="tg-0lax">13</td>
            <td class="tg-0lax">Mr. Saiyad Irshad</td>
            <td class="tg-0lax">QA/QC Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9576871246</td>
          </tr>
          <tr>
            <td class="tg-0lax">14</td>
            <td class="tg-0lax">Mr. Dharmendra Singh</td>
            <td class="tg-0lax">QA/QC Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8222999057</td>
          </tr>
          <tr>
            <td class="tg-0lax">15</td>
            <td class="tg-0lax">Mr Shashank Kumar</td>
            <td class="tg-0lax">Engineer-QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8507282063</td>
          </tr>
          <tr>
            <td class="tg-0lax">16</td>
            <td class="tg-0lax">Mr. Guptesh Kumar Jha</td>
            <td class="tg-0lax">Sr, Engineer QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7697549151</td>
          </tr>
          <tr>
            <td class="tg-0lax">17</td>
            <td class="tg-0lax">Mr. Angad Kumar Singh</td>
            <td class="tg-0lax">Asst. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9102699200</td>
          </tr>
          <tr>
            <td class="tg-0lax">18</td>
            <td class="tg-0lax">Mr. Navdeep Chandra</td>
            <td class="tg-0lax">Asst. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8742904490</td>
          </tr>
          <tr>
            <td class="tg-0lax">19</td>
            <td class="tg-0lax">Mr. Niranjan Kumar</td>
            <td class="tg-0lax">Sr.Lab Tech - QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8271260283</td>
          </tr>
          <tr>
            <td class="tg-0lax">20</td>
            <td class="tg-0lax">Mr. Ashist Kumar</td>
            <td class="tg-0lax">Sr.Lab Tech - QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7534089466</td>
          </tr>
          <tr>
            <td class="tg-0lax">21</td>
            <td class="tg-0lax">Mr. Aashish Kumar Singh</td>
            <td class="tg-0lax">Asst. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9956135432</td>
          </tr>
          <tr>
            <td class="tg-0lax">22</td>
            <td class="tg-0lax">Mr. Sarvjeet Kumar</td>
            <td class="tg-0lax">Sr, Engineer QA/QC</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9573004008</td>
          </tr>
          <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
         
          
            
  
  
  
  
  
        </table>   
  
        <a href="Quality Department.php" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>