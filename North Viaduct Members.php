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
            <th class="tg-0lax">Mr. Santosh Kumar</th>
            <th class="tg-0lax">Head of Division</th>
            <th class="tg-0lax"></th>
            <th class="tg-0lax">7763803992</th>
          </tr>
        
        
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Mr. Ritesh Kumar</td>
            <td class="tg-0lax">Const. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7999303655</td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr. Vikash kumar</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9983030670</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Ashuthosh Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8331903822</td>
          </tr>
          <tr>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax">Mr. Vishwajeet Yadav</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7004759212</td>
          </tr>
          <tr>
            <td class="tg-0lax">6</td>
            <td class="tg-0lax">Mr. Sourav Mandol</td>
            <td class="tg-0lax">Junior-Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7020956397</td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">Mr. Bishnupada Mahata</td>
            <td class="tg-0lax">Assistance-Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9304648150</td>
          </tr>
          <tr>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">Mr. A.P Verma</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8826476609</td>
          </tr>
          <tr>
            <td class="tg-0lax">9</td>
            <td class="tg-0lax">Mr. Vijay Mishra</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8178767284</td>
          </tr>
          <tr>
            <td class="tg-0lax">10</td>
            <td class="tg-0lax">Mr. Panchu Kumar</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9215452896</td>
          </tr>
          <tr>
            <td class="tg-0lax">11</td>
            <td class="tg-0lax">Mr. Roshan Kumar</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7004503371</td>
          </tr>
          <tr>
            <td class="tg-0lax">12</td>
            <td class="tg-0lax">Mr. Praveen Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7004163684</td>
          </tr>
          <tr>
            <td class="tg-0lax">13</td>
            <td class="tg-0lax">Mr. Shakti Prakash</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9588972408</td>
          </tr>
          <tr>
            <td class="tg-0lax">14</td>
            <td class="tg-0lax">Mr. Goutham P</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">15</td>
            <td class="tg-0lax">Mr. Subhankar Majumder</td>
            <td class="tg-0lax">Assistant Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9472379708</td>
          </tr>
          <tr>
            <td class="tg-0lax">16</td>
            <td class="tg-0lax">Mr. Gaurav kumar sharma</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">6522247447</td>
          </tr>
          <tr>
            <td class="tg-0lax">17</td>
            <td class="tg-0lax">Mr. Ajit Kumar Jha</td>
            <td class="tg-0lax">Junior-Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">6952221114</td>
          </tr>
          <tr>
            <td class="tg-0lax">18</td>
            <td class="tg-0lax">Mr. Tapas Haldar</td>
            <td class="tg-0lax">Assistant Chargehand (Civil)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8777525275</td>
          </tr>
          <tr>
            <td class="tg-0lax">19</td>
            <td class="tg-0lax">Mr. Tanmay Goswami</td>
            <td class="tg-0lax">Assistant. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8505800199</td>
          </tr>
          <tr>
            <td class="tg-0lax">20</td>
            <td class="tg-0lax">Mr. M K Patra</td>
            <td class="tg-0lax">Gen. Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8383950260</td>
          </tr>
          <tr>
            <td class="tg-0lax">21</td>
            <td class="tg-0lax">Mr. Rahul Kumar Ranjan</td>
            <td class="tg-0lax">SR ENGINEER</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">6280349542</td>
          </tr>
          <tr>
            <td class="tg-0lax">22</td>
            <td class="tg-0lax">Mr. Abhishek Kumar</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">23</td>
            <td class="tg-0lax">Mr. Kundan Jha</td>
            <td class="tg-0lax">Assistance-Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8518887270</td>
          </tr>
          <tr>
            <td class="tg-0lax">24</td>
            <td class="tg-0lax">Mr. Anup Kumar</td>
            <td class="tg-0lax">Junior-Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8484991043</td>
          </tr>
          <tr>
            <td class="tg-0lax">25</td>
            <td class="tg-0lax">Mr. Subham Debnath</td>
            <td class="tg-0lax">Junior-Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8582087801</td>
          </tr>
          <tr>
            <td class="tg-0lax">26</td>
            <td class="tg-0lax">Mr. Alok Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8051602058</td>
          </tr>
          <tr>
            <td class="tg-0lax">27</td>
            <td class="tg-0lax">Mr. Amitabh Ketu</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7061776889</td>
          </tr>
          <tr>
            <td class="tg-0lax">28</td>
            <td class="tg-0lax">Mr. Kunal Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8809890375</td>
          </tr>
          <tr>
            <td class="tg-0lax">29</td>
            <td class="tg-0lax">Mr. Jay Prakash Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9424844803</td>
          </tr>
          <tr>
            <td class="tg-0lax">30</td>
            <td class="tg-0lax">Mr. Ashish Kumar Mishra</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8360618097</td>
          </tr>
          <tr>
            <td class="tg-0lax">31</td>
            <td class="tg-0lax">Mr. MD Aslam</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9661215736</td>
          </tr>
          <tr>
            <td class="tg-0lax">32</td>
            <td class="tg-0lax">Mr. Sunil Pandit</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">33</td>
            <td class="tg-0lax">Mr. Ashar Rumi Raza</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">34</td>
            <td class="tg-0lax">Mr. Chandan Kumar</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8340290362</td>
          </tr>
          <tr>
            <td class="tg-0lax">35</td>
            <td class="tg-0lax">Mr. Narayan Sharma</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">36</td>
            <td class="tg-0lax">Mr. Satyam Kumar Bhardwaj</td>
            <td class="tg-0lax">SR ENGINEER</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9135472218</td>
          </tr>
          <tr>
            <td class="tg-0lax">37</td>
            <td class="tg-0lax">Mr. Jagjeet Singh</td>
            <td class="tg-0lax">Sr. Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9643697412</td>
          </tr>
          <tr>
            <td class="tg-0lax">38</td>
            <td class="tg-0lax">Mr. Vasetti Shankararao</td>
            <td class="tg-0lax">Sr. Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9014461334</td>
          </tr>
          <tr>
            <td class="tg-0lax">39</td>
            <td class="tg-0lax">Mr. Ravindra Singh</td>
            <td class="tg-0lax">Chargehand</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7834845445</td>
          </tr>
          <tr>
            <td class="tg-0lax">40</td>
            <td class="tg-0lax">Mr. Vishwajeet</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9525404876</td>
          </tr>
          <tr>
            <td class="tg-0lax">41</td>
            <td class="tg-0lax">Mr. Gaurav Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">7086831456</td>
          </tr>
          <tr>
            <td class="tg-0lax">42</td>
            <td class="tg-0lax">Mr. Ravi Ranjan</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8619971540</td>
          </tr>
          <tr>
            <td class="tg-0lax">43</td>
            <td class="tg-0lax">Mr. Harshit Khandelwal</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">8013490828</td>
          </tr>
          <tr>
            <td class="tg-0lax">44</td>
            <td class="tg-0lax">Mr. Rahul Dev</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">9631631801</td>
          </tr>
  
  
  
  
  
        </table>   
  
        <a href="Design.html" class="previous">&laquo; Previous</a>
        <a href="#" class="next">Next &raquo;</a>
        
        <a href=".html" class="previous round">&#8249;</a>
        <a href="#" class="next round">&#8250;</a>
      


    
</body>
</html>