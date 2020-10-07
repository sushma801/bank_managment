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
		color:#266E69;
		float:left;
		height:90%;
		width:50%;
	}
	#r_content1{
		color:#266E69;
		float:right;
		height:90%;
		width:42%;
	}
	#r_head1{
		color:#266E69;
		padding-left:15%;
		margin-top:1px;
		font: italic  bold 25px/30px Georgia, serif;
	}
	#r_head2{
		color:#266E69;
		padding-left:12%
		margin-top:1px;
		font: italic bold 22px/30px Georgia, serif;
	}
	#name_d{
		color:#266E69;
		margin-left:40%;
		font: italic bold 20px/30px Georgia,serif;
	}
	#name{
		color:#266E69;
		width:70%;
		margin-top:5%;
		margin-left:15%
	}
	#account_d{
		color:#266E69;
		margin-top:20%;
		margin-left:34%;
		font: italic bold 20px/30px Georgia, serif;
	}
	#account{
		color:#266E69;
		margin-left:15%;
		margin-top:5%;
		width:70%;
	}
	#submit{
		width:50%;
		margin-left:25%;
		margin-top:5%;
		background-color:#266E69;
		color:white;
	}
	#back{
		width:50%;
		margin-left:25%;
		background-color:#266E69;
		color:white;
	}
	.t_row{
		border:1px solid black;
		margin-left:10%;
		color:#266E69;
	}
	td,th{
		padding:10px 20px 5px 10px;
		border:2px;
		color:#266E69;
	}
	#ref{
		color:white;
	}
</style>
<body>
	<?php
		include("Demo.php");
	?>
	<header>
		<div class="row">
			<div class="col">
				<div class="leftside">
					<fieldset id="menu">
					<div id="content_left">
						<a href="viewcustomers.php" id="ref">
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
							<h3 id="r_head1">Customer in the Bank</h3>
							<?php
								
								$conn=mysqli_connect('localhost','root','','bank_managment');
								$sql= "SELECT * FROM viewcustomers";
								$result= $conn->query($sql);
								if($result->num_rows>0)
								{
									print '<table class="t_row">
												<tr>
													<th>S.N</th>
													<th>Name</th>
													<th>Account No.</th>
												</tr>';
									while($row=$result->fetch_assoc())
									{
										print '<tr>';
										print '<td>'.$row["Id"].'</td>';
										print '<td>'.$row["Name"].'</td>';
										print '<td>'.$row["Account_No"].'</td>';
										$value=$row['Account_No'];
									}
									print '</table>';
									function Operation($value)
									{
										print "Hello ".$value;
									}
								}
							?>
						</fieldset>
					</div>
					<div id="details1">
						<fieldset id ="r_content1">
							<h3 id="r_head2"> Want to View Details of Customer</h3>
							<form action="ViewOneCustomer.php" method="post">
								<br>
								<label for="name" id="name_d">Name</label><br>
								<input type="text" name="name" id="name" required><br><br><br>
								<label for="account" id="account_d">Account No</label><br>
								<input type="text" name="account" id="account" required><br><br>
								<input type="submit" name="submit" value="Submit" id="submit">
							</form>
								<button type="submit" onclick="goBack()" id="back">Back</button>
								<script>
									function goBack()
									{
										window.history.back();
									}
								</script>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</header>
</html>