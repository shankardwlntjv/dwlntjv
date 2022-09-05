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
            <th class="tg-0lax">Mr. Min Woo Kim</th>
            <th class="tg-0lax">Head of Division</th>
            <th class="tg-0lax"></th>
            <th class="tg-0lax">73199-42426</th>
          </tr>
        
        
          <tr>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">Mr. Hong Tae Kim</td>
            <td class="tg-0lax">General Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">92629-99428</td>
          </tr>
          <tr>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">Mr. Seong Jin Lee</td>
            <td class="tg-0lax">Construction Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">74858-05002</td>
          </tr>
          <tr>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">Mr. Gi Haeng Heo</td>
            <td class="tg-0lax">Construction Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">92626-96463</td>
          </tr>
          <tr>
            <td class="tg-0lax">5</td>
            <td class="tg-0lax">Mr. Yong Hun Jin</td>
            <td class="tg-0lax">Construction Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">92626-96464</td>
          </tr>
          <tr>
            <td class="tg-0lax">6</td>
            <td class="tg-0lax">Mr. S. P. Singh</td>
            <td class="tg-0lax">Construction Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">62062-99854</td>
          </tr>
          <tr>
            <td class="tg-0lax">7</td>
            <td class="tg-0lax">Mr. Eui Su Park</td>
            <td class="tg-0lax">Expert</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">74858-05647</td>
          </tr>
          <tr>
            <td class="tg-0lax">8</td>
            <td class="tg-0lax">Mr. Hyeong Rae Kim</td>
            <td class="tg-0lax">Expert</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">92629-99430</td>
          </tr>
          <tr>
            <td class="tg-0lax">9</td>
            <td class="tg-0lax">Mr. Wilson Nitesh Kisku</td>
            <td class="tg-0lax">Asst. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">94302-23165</td>
          </tr>
          <tr>
            <td class="tg-0lax">10</td>
            <td class="tg-0lax">Mr. Varun Kumar Yadav</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">75429-69341</td>
          </tr>
          <tr>
            <td class="tg-0lax">11</td>
            <td class="tg-0lax">Mr. Rohit Raj</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">95086-44927</td>
          </tr>
          <tr>
            <td class="tg-0lax">12</td>
            <td class="tg-0lax">Mr. Dinesh Kumar</td>
            <td class="tg-0lax">Engineer CAD</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">13</td>
            <td class="tg-0lax">Mr. Ramakanta Mohanty</td>
            <td class="tg-0lax">Sr. Surveyor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">63021-59216</td>
          </tr>
          <tr>
            <td class="tg-0lax">14</td>
            <td class="tg-0lax">Mr. Ashish Kumar Jha</td>
            <td class="tg-0lax">Surveyor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">98869-36694</td>
          </tr>
          <tr>
            <td class="tg-0lax">15</td>
            <td class="tg-0lax">Mr. Dipankar Santra</td>
            <td class="tg-0lax">Surveyor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">80133-05000</td>
          </tr>
          <tr>
            <td class="tg-0lax">16</td>
            <td class="tg-0lax">Mr. Sathish Kumar L</td>
            <td class="tg-0lax">DY. Manager Civil</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">63841-62166</td>
          </tr>
          <tr>
            <td class="tg-0lax">17</td>
            <td class="tg-0lax">Mr. Suman Mondal</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">84204-13269</td>
          </tr>
          <tr>
            <td class="tg-0lax">18</td>
            <td class="tg-0lax">Mr. Devidutta Patra</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">97760-74991</td>
          </tr>
          <tr>
            <td class="tg-0lax">19</td>
            <td class="tg-0lax">Mr. Amit Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">79799-01338</td>
          </tr>
          <tr>
            <td class="tg-0lax">20</td>
            <td class="tg-0lax">Mr. Babu Lal Shah</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">99345-78082</td>
          </tr>
          <tr>
            <td class="tg-0lax">21</td>
            <td class="tg-0lax">Mr. Soumen Mistry</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">85828-20784</td>
          </tr>
          <tr>
            <td class="tg-0lax">22</td>
            <td class="tg-0lax">Mr. Abhijit Das</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">98830-33253</td>
          </tr>
          <tr>
            <td class="tg-0lax">23</td>
            <td class="tg-0lax">Mr. Ashutosh Dandapat</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">82498-56629</td>
          </tr>
          <tr>
            <td class="tg-0lax">24</td>
            <td class="tg-0lax">Mr. Ishan Thakur</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">94594-59460</td>
          </tr>
          <tr>
            <td class="tg-0lax">25</td>
            <td class="tg-0lax">Mr. N K Singh</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">95603-50763</td>
          </tr>
          <tr>
            <td class="tg-0lax">26</td>
            <td class="tg-0lax">Mr. Ritesh Kumar Singh</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">73100-92496</td>
          </tr>
          <tr>
            <td class="tg-0lax">27</td>
            <td class="tg-0lax">Mr. Ramesh Prasad</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">92679-78352</td>
          </tr>
          <tr>
            <td class="tg-0lax">28</td>
            <td class="tg-0lax">Mr. Md Tazim</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">85275-01089</td>
          </tr>
          <tr>
            <td class="tg-0lax">29</td>
            <td class="tg-0lax">Mr. Aftab Khan</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">96194-89850</td>
          </tr>
          <tr>
            <td class="tg-0lax">30</td>
            <td class="tg-0lax">Mr. Sajan Das</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">82401-46696</td>
          </tr>
          <tr>
            <td class="tg-0lax">31</td>
            <td class="tg-0lax">Mr. Shubham Dwivedi</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">96968-60058</td>
          </tr>
          <tr>
            <td class="tg-0lax">32</td>
            <td class="tg-0lax">Mr. Mohan Kumar Sinha</td>
            <td class="tg-0lax">Assist. Manager Civil</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">90067-23088</td>
          </tr>
          <tr>
            <td class="tg-0lax">33</td>
            <td class="tg-0lax">Mr. Vijay Kant Choudhary</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">75469-06550</td>
          </tr>
          <tr>
            <td class="tg-0lax">34</td>
            <td class="tg-0lax">Mr. Purushottam Kr. Pandey</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">87579-80304</td>
          </tr>
          <tr>
            <td class="tg-0lax">35</td>
            <td class="tg-0lax">Mr. Lalit Kumar Yadav</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">78923-39895</td>
          </tr>
          <tr>
            <td class="tg-0lax">36</td>
            <td class="tg-0lax">Mr. Mukesh Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">77819-01897</td>
          </tr>
          <tr>
            <td class="tg-0lax">37</td>
            <td class="tg-0lax">Mr. Sanjeev Kumar</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">93108-53833</td>
          </tr>
          <tr>
            <td class="tg-0lax">38</td>
            <td class="tg-0lax">Mr. Ravi Roy</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">87095-27085</td>
          </tr>
          <tr>
            <td class="tg-0lax">39</td>
            <td class="tg-0lax">Mr. Ram awadh Prasad</td>
            <td class="tg-0lax">Sr. Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">98712-14753</td>
          </tr>
          <tr>
            <td class="tg-0lax">40</td>
            <td class="tg-0lax">Mr. Bapi Jana</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">86700-00515</td>
          </tr>
          <tr>
            <td class="tg-0lax">41</td>
            <td class="tg-0lax">Mr. Rakesh Thakur</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">70212-00363</td>
          </tr>
          <tr>
            <td class="tg-0lax">42</td>
            <td class="tg-0lax">Mr. Raj Singh</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax">93041-51272</td>
          </tr>
          <tr>
            <td class="tg-0lax">43</td>
            <td class="tg-0lax">Mr. Muthu Krishnan . P</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">44</td>
            <td class="tg-0lax">Mr. Ganesh Ram</td>
            <td class="tg-0lax">Foreman (Carpenter)</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">45</td>
            <td class="tg-0lax">Mr. Rahuljee Thakur</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">46</td>
            <td class="tg-0lax">Mr. Randheer Singh</td>
            <td class="tg-0lax">Supervisor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">47</td>
            <td class="tg-0lax">Mr. Ravi Kumar</td>
            <td class="tg-0lax">Supervisor</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">48</td>
            <td class="tg-0lax">Mr. Vikash Kumar Singh</td>
            <td class="tg-0lax">Asst. Manager - Civil</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">49</td>
            <td class="tg-0lax">Mr. Pankaj Kumar</td>
            <td class="tg-0lax">Asst. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">50</td>
            <td class="tg-0lax">Mr. Rahul Kumar</td>
            <td class="tg-0lax">Engineer - Structure</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">51</td>
            <td class="tg-0lax">Mr. Smruti R. Biswal</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">52</td>
            <td class="tg-0lax">Mr. Atif Shafaat</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">53</td>
            <td class="tg-0lax">Mr. Pradip Pandit</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">54</td>
            <td class="tg-0lax">Mr. Somesh Biswas</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">55</td>
            <td class="tg-0lax">Mr. Locha Ram</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">56</td>
            <td class="tg-0lax">Mr. Naveen Kumar</td>
            <td class="tg-0lax">Dpty. Manager</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">57</td>
            <td class="tg-0lax">Mr. Suresh Singh</td>
            <td class="tg-0lax">Sr. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">58</td>
            <td class="tg-0lax">Mr. Uday Singh</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">59</td>
            <td class="tg-0lax">Mr. Rameshwar Ajit</td>
            <td class="tg-0lax">Foreman</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">60</td>
            <td class="tg-0lax">Mr. Raushan Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">61</td>
            <td class="tg-0lax">Mr. Sandeep Kumar</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">62</td>
            <td class="tg-0lax">Mr. Abdul Mannan SK</td>
            <td class="tg-0lax">Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">63</td>
            <td class="tg-0lax">Mr. Sourav Das</td>
            <td class="tg-0lax">Asst. Engineer</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
          </tr>
          <tr>
            <td class="tg-0lax">64</td>
            <td class="tg-0lax">Mr. Moshin Siddique</td>
            <td class="tg-0lax">Engineer</td>
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