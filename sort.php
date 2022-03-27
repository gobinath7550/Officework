
<html>  

<head>  

<title> Pagination in PHP </title>  
<style>
 table,th,td{
	 border : 1px solid black;
	 border-collapse :collapse;
 }
</style>
</head>  

<body>   

<?php  

    $conn = mysqli_connect('localhost', 'root', 'gobi@123');  

    // root is the default username 

    // ' ' is the default password

    if (! $conn) {  

             die("Connection failed" . mysqli_connect_error());  

    }  

    else {  

             // connect to the database named Pagination

             mysqli_select_db($conn, 'mydb');  

    }  

    // variable to store number of rows per page

    $limit = 4;  

    // query to retrieve all rows from the table Countries

    $getQuery = "select *from employee";    
	$getQueryDes="Select * from employee ORDER BY EmployeeID DESC";

    // get the result

    $result = mysqli_query($conn, $getQuery);  

    $total_rows = mysqli_num_rows($result);    

    // get the required number of pages

    $total_pages = ceil ($total_rows / $limit);   	

    // update the active page number

    if (!isset ($_GET['page']) ) {  

        $page_number = 1;  

    } else {  

        $page_number = $_GET['page'];  

    }    
	 if (!isset ($_GET['id']) ) {  

        $sort_by = 'EmployeeID';  

    } else {  

        $sort_by = $_GET['id'];  

    }    
	 if (!isset ($_GET['sort']) ) {  

        $sort = 'ASC';  

    } else {  

        $sort = $_GET['sort'];  

    }    
	

    // get the initial page number

    $initial_page = ($page_number-1) * $limit;   

    // get data of selected rows per page    

    $getQuery = "SELECT *FROM employee ORDER BY $sort_by $sort LIMIT " . $initial_page . ',' . $limit;  

    $result = mysqli_query($conn, $getQuery);       

    //display the retrieved result on the webpage  
	echo "<table>";
	echo "<tr>";
    echo "<th>Employee ID<a href='sort.php?id=EmployeeID&&sort=ASC'>A</a>/<a href='sort.php?id=EmployeeID&&sort=DESC'>D</a></th>"."<th>First name<a href='sort.php?id=FirstName&&sort=ASC'>A</a>/<a href='sort.php?id=FirstName&&sort=DESC'>D</a></th>"."<th>Last name</th>"."<th>E-mail</th>"."<th>Address</th>"."<th>Job ID</th>"."<th>Manager ID</th>"."<th>Mobile number</th>"."<th>Department</th>"."<th>Salary<a href='sort.php?id=Salary&&sort=ASC'>A</a>/<a href='sort.php?id=Salary&&sort=DESC'>D</a></th>";
	echo "</tr>";
	 
    while ($row = mysqli_fetch_array($result)) { 	
	
        echo "<tr>";
		echo "<td>".$row['EmployeeID']."</td><td> ".$row['FirstName']."</td><td> ".$row['LastName']."</td><td> ".$row['Email']."</td><td> ".$row['Address']."</td><td> ".$row['JobID']."</td><td> ".$row['ManagerID']."</td><td> ".$row['MobileNumber']."</td><td> ".$row['Department']."</td><td> ".$row['Salary']."</td>";
		echo "</tr><br>";
    }    
	echo "</table>";

    // show page number with link   
    for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

        echo '<a href = "sort.php?page=' . $page_number . '&id=' . $sort_by . '&sort=' . $sort . '">' . $page_number . ' </a>';  

    }    

?>  

</body>  

</html>