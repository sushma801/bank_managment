<?php
	$conn=mysqli_connect('localhost','root','','bank_managment');
	if($conn)
		echo "yes";
	$oldbalanceC="";
	$oldbalanceD="";
	$accountD=$_POST['accountD'];
	$balanceD=$_POST['ammount'];
	$accountC=$_POST['accountC'];
	if($accountC!=$accountD)
	{
		$sql="SELECT Balance FROM customers WHERE Account_No='".$accountD."' ";
		if($result=mysqli_query($conn,$sql))
		{
			//print "<br> Hello sushma";
			while($row=$result->fetch_assoc())
			{
				$oldbalanceD=$row["Balance"];
			}
		}
		//print "<br>$oldbalanceD";
		$newBalanceD=$oldbalanceD-$balanceD;
		$newBalanceC="";
		if($oldbalanceD>$balanceD)
		{
			
			$sql1="SELECT Balance FROM customers WHERE Account_No='".$accountC."'";
			if($result=mysqli_query($conn,$sql1))
			{
				while($row=$result->fetch_assoc())
				{
					$oldbalanceC=$row["Balance"];
				}
			}
			$newBalanceC=$oldbalanceC+$balanceD;
			$sql2="UPDATE customers SET Balance='".$newBalanceD."' WHERE Account_No='".$accountD."'";
			$sql3="UPDATE customers SET Balance='".$newBalanceC."' WHERE Account_No='".$accountC."'";
			if($conn->query($sql3)==TRUE AND $conn->query($sql2)==TRUE)
			{
				//print "Success 2 AND 3";
				print '<script type="text/javascript">';
				print 'alert("Transaction Successful");';
				print 'window.location.href="viewCustomers.php"';
				print '</script>';
			}
		}
		else if($oldbalanceD<$balanceD){ 
			print '<script type="text/javascript">';
			print 'alert("In-sufficient Balance");';
			print 'window.location.href="viewCustomers.php"';
			print '</script>';
		}
	}
	else
	{
		print '<script type="text/javascript">';
		print 'alert("Check Account No and Try again");';
		print 'window.location.href="viewCustomers.php"';
		print '</script>';
	}
?>