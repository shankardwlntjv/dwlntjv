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
            <th class="tg-0lax">Mr. Sujeet Kumar</th>
            <th class="tg-0lax">Head of Division</th>
            <th class="tg-0lax"></th>
            <th class="tg-0lax">7004513837</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Dharmendra Kumar</td>
            <td class="tg-0lax">Sr. Manager (P&amp;M)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9759793457</td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr.Sandeep Kumar Mishra</td>
            <td class="tg-0lax">Engineer Electrical</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8130718049</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Rohan Raj</td>
            <td class="tg-0lax">Electrical Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">6200907924</td>
          </tr>
          <tr>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax">Mr. Santosh Kumar Tiwari</td>
            <td class="tg-0lax">Asst. P&amp;M</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9140800109</td>
          </tr>
          <tr>
            <td class="tg-0lax">6</td>
            <td class="tg-0lax">Mr. Jitendra Kumar</td>
            <td class="tg-0lax">P&amp;M Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9771193060</td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">Mr. Amit Jha</td>
            <td class="tg-0lax">Senior Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9871858720</td>
          </tr>
          <tr>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">Mr. Dipak Kumar Chatterjee</td>
            <td class="tg-0lax">Electrical Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9835588705</td>
          </tr>
          <tr>
            <td class="tg-0lax">9</td>
            <td class="tg-0lax">Mr. Rajesh Kumar</td>
            <td class="tg-0lax">Manager (P&amp;M)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7091976795</td>
          </tr>
          <tr>
            <td class="tg-0lax">10</td>
            <td class="tg-0lax">Mr.Hemant Pandey</td>
            <td class="tg-0lax">Asst Manager (P&amp;M)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9311322151</td>
          </tr>
          <tr>
            <td class="tg-0lax">11</td>
            <td class="tg-0lax">Mr. Fakhri Aziz Chunawala</td>
            <td class="tg-0lax">Asst Manager (P&amp;M)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8149585689</td>
          </tr>
          <tr>
            <td class="tg-0lax">12</td>
            <td class="tg-0lax">Mr. Sachin Kumar</td>
            <td class="tg-0lax">Mechanical Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9771855009</td>
          </tr>
          <tr>
            <td class="tg-0lax">13</td>
            <td class="tg-0lax">Mr. Amiya Das Gupta</td>
            <td class="tg-0lax">Assistant Supervisor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8348636316</td>
          </tr>
          <tr>
            <td class="tg-0lax">14</td>
            <td class="tg-0lax">Mr Ajay Kumar</td>
            <td class="tg-0lax">P&amp;M Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7091136861</td>
          </tr>
          <tr>
            <td class="tg-0lax">15</td>
            <td class="tg-0lax">Mr Kislaya Kumar</td>
            <td class="tg-0lax">P&amp;M Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9304326793</td>
          </tr>
          <tr>
            <td class="tg-0lax">16</td>
            <td class="tg-0lax">Mahadevan G</td>
            <td class="tg-0lax">Asst Manager (P&amp;M)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9789906131</td>
          </tr>
          <tr>
            <td class="tg-0lax">17</td>
            <td class="tg-0lax">Prabhat Ranjan</td>
            <td class="tg-0lax">Elect. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">6201516199</td>
          </tr>
          <tr>
            <td class="tg-0lax">18</td>
            <td class="tg-0lax">Piyush Raj</td>
            <td class="tg-0lax">Asst. Elect. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8210132424</td>
          </tr>
          <tr>
            <td class="tg-0lax">19</td>
            <td class="tg-0lax">Sunil yadav</td>
            <td class="tg-0lax">Sr. Engineer - Electrical</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9599652636</td>
          </tr>
          <tr>
            <td class="tg-0lax">20</td>
            <td class="tg-0lax">Remant Kumar</td>
            <td class="tg-0lax">Assistant Manager (P&amp;M)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">6201350228</td>
          </tr>
          <tr>
            <td class="tg-0lax">21</td>
            <td class="tg-0lax">Gaurav Kumar</td>
            <td class="tg-0lax">Sr. Engineer (P&amp;M)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9990672489</td>
          </tr>
          <tr>
            <td class="tg-0lax">22</td>
            <td class="tg-0lax">Pravat Kumar Mohanty</td>
            <td class="tg-0lax">Engineer - Electrical</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9509748300</td>
          </tr>
          <tr>
            <td class="tg-0lax">23</td>
            <td class="tg-0lax">Premdeep Kumar</td>
            <td class="tg-0lax">Engineer - Mechanical</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7982193053</td>
          </tr>
          <tr>
            <td class="tg-0lax">24</td>
            <td class="tg-0lax">Krishna Murari Kumar</td>
            <td class="tg-0lax">Engineer - Mechanical</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9534558008</td>
          </tr>
          <tr>
            <td class="tg-0lax">25</td>
            <td class="tg-0lax">Kamalendu Jana</td>
            <td class="tg-0lax">Engineer - Mechanical</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>

         
  
  
  
  
  
        </table>   
  
        <a href="P&M Department.php" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>