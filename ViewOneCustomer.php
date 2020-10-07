<html>
<style>
	.leftside{
		float:left;
		height:90%;
		width:30%;
		background-color:#266E69;
	}
	.rightside{
		float:right;
		height:98%;
		width:70%;
		background-color:White;
	}
	#content_left{
		padding-left:15%;
		font: italic  bold 25px/30px Georgia, serif;
	}
	#menu{
		border-color:white;
		margin-top:30%;
		margin-left:5%;
		height:40%;
		width:80%;
	}
	#r_content{
		float:left;
		height:90%;
		width:97%;
	}
	#detail_head{
		color:#266E69;
		padding-left:35%;
		margin-top:1px;
		font: italic  bold 25px/30px Georgia, serif;
	}
	
	.t_row{
		color:#266E69;
		border:1px solid black;
		padding:4px;
	}
	#r_content1{
		margin-top:5%;
		width:89%;
		height:60%;
		color:#266E69;
	}
	#r_leftSide{
		float:left;
		height:50%;
		width:40%;
	}
	#r_rightSide{
		
		float:right;
		height:50%;
		width:40%;
	}
	#r_content1_head{
		font: italic bold 25px/30px Georgia,serif;
		margin-left:25%;
		border:0;
		margin-top:2px;
	}
	
	#dRS{
		margin-left:15%;
		font: italic bold 20px/30px Georgia,serif;
	}
	#drs1{
		margin-left:15%;
		font: italic bold 10px/30px Georgia,serif;
	}
	#cRS{
		margin-left:25%;
		font:italic bold 20px/30px Georgia,serif;
	}
	#crs1{
		margin-left:25%;
		font: italic bold 10px/30px Georgia,serif;
	}
	#dRS2{
		margin-left:15%;
	}
	#cRS2{
		margin-left:25%;
	}
	#submit1{
		float:left;
		margin-top:30%;
		background-color:#266E69;
		color:white;
	}
	#ref{
		color:white;
	}
	#back{
		float:right;
		width:8%;
		margin-left:3%;
		margin-top:30%;
		background-color:#266E69;
		color:white;
	}
</style>
<body>
	<?php
		include("Demo.php");
	?>
	<div class="row">
		<div class="col">
			<div class="leftside">
				<fieldset id="menu">
				<div id="content_left">
					<a href="viewCustomers.php" id="ref">
						<marquee direction="up" height=100% width=100% onmouseover="this.stop();" onmouseout="this.start();">
							View all Customer
						</marquee>
					</a>
				</div>
				</fieldset>
			</div>
		</div>
			<div class="col">
				<div class="rightside">
					<div id="details">
						<fieldset id="r_content">
							<h4 id="detail_head">Details of  Customer</h4>
							<?php
								$conn=mysqli_connect('localhost','root','','bank_managment');
								$name=$_POST['name'];
								$accountNo=$_POST['account'];
								$sql= "SELECT * FROM customers WHERE Name='".$name."' AND Account_No='".$accountNo."' limit 1";
								$result= $conn->query($sql);
								if($result->num_rows==1)
								{
									print '<table class="t_row">
												<tr>
													<th>Name</th>
													<th>Account No.</th>
													<th>State</th>
													<th>District</th>
													<th>Mobile No.</th>
													<th>E-mail</th>
													<th>Balance</th>
												</tr>';
									while($row=$result->fetch_assoc())
									{
										print '<tr>';
										print '<td>'.$row["Name"].'</td>';
										print '<td>'.$row["Account_No"].'</td>';
										print '<td>'.$row["State"].'</td>';
										print '<td>'.$row["District"].'</td>';
										print '<td>'.$row["Mobile"].'</td>';
										print '<td>'.$row["E-mail"].'</td>';
										print '<td>'.$row["Balance"].'</td>';
										print '</tr>';
									}
									print "</table>";
								}
								else{
									print '<script type="text/javascript">';
									print 'alert("Check Account No and Try again");';
									print 'window.location.href="viewCustomers.php"';
									print '</script>';
								}
						?>
						<fieldset id="r_content1">
							<h4 id="r_content1_head">Want to transfer Money</h4>
							<form action="CheckBalance.php" method="post">
								<div id="r_leftSide">
									<label for="debite" id="dRS">Debited From</label><br>
									<label for="d" id="drs1">(Account No.)</label><br><br>
									<input type="text" name="accountD" id="dRS2" required><br><br>
									<label for="rs" id="dRS">Ammount</label><br>
									<label for="d" id="drs1">(RS.)</label><br><br>
									<input type="number" step="any" name="ammount" id="dRS2" required>
								</div>
								<div id="r_rightSide">
									<label for="credite" id="cRS">Credited To</label><br>
									<label for="c" id="crs1">(Account No.)</label><br><br>
									<input type="text" name="accountC" id="cRS2"><br><br>		
								</div>
								<input type="submit" name="submit" value="Submit" id="submit1">
								<button type="submit" onclick="goBack()" id="back">Back</button>
								<script>
									function goBack()
									{
										window.history.back();
									}
								</script>
							</form>
						</fieldset>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</body>
</html>