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
    <title>Human Resource Members</title>
  
  <style>
            body{
                        background-color: wheat;
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
                   <h2>  <u> Members List of Human Resource Department </u> </h2>
                  
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
                        <td>Mr. Ajay Nath</td>
                        <td>Head of Division</td>
                        <td> </td>
                        <td>7632903834</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Mr. Ashutosh Kumar Singh</td>
                        <td>Executive HR</td>
                        <td> </td>
                        <td>9709994251 </td>
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
              
                    <a href="HR Department.php" class="previous">&laquo; Previous</a>
                    <a href="#" class="next">Next &raquo;</a>
                    
                    <a href="HR Department.html" class="previous round">&#8249;</a>
                    <a href="#" class="next round">&#8250;</a>
                  
            
</body>
</html>