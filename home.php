<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
		$username=$_SESSION['uname'];
		$root=$_SESSION['root'];
		$sql_query1 = "select * from employee where FirstName LIKE '%$username%'";
        $result1 = mysqli_query($con,$sql_query1);
        $row1 = mysqli_fetch_array($result1);
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>WELCOME <?php echo $row1['FirstName'];echo " ";echo  $row1['LastName'];?></h1>
		<table><tr><td>FIRST NAME</td><td>
		<?php
		echo $row1['FirstName'];
		?></td></tr>
		<tr><td>LAST NAME</td><td>
		<?php
		echo $row1['LastName'];
		?></td></tr>
		<tr><td>E-MAIL</td><td>
		<?php
		echo $row1['Email'];
		?></td></tr>
		<tr><td>ADDRESS</td><td>
		<?php
		echo $row1['Address'];
		?></td></tr>
		<tr><td>JOB ID</td><td>
		<?php
		echo $row1['JobID'];
		?></td></tr>
		<tr><td>MANAGER ID</td><td>
		<?php
		echo $row1['ManagerID'];
		?></td></tr>
		<tr><td>MOBILE NUMBER</td><td>
		<?php
		echo $row1['MobileNumber'];
		?></td></tr>
		<tr><td>DEPARTMENT</td><td>
		<?php
		echo $row1['Department'];
		?></td></tr>
		<tr><td>Salary</td><td>
		<?php
		echo $row1['Salary'];
		?></td></tr>
		</table>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>