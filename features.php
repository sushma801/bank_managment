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
		#r_head{
			padding-left:10%;
			color:#266E69;
			font: italic  bold 15px/30px Georgia, serif;
		}
		#list{
			margin-left:20%;
			font: italic  bold 12px/30px Georgia, serif;
			color:#266E69;
		}
		#ref{
			color:white;
		}
	</style>
	<?php
		include("Demo.php");
	?>
	<body>
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
				<div class="rightside">
					<div id="details">
						<fieldset id="r_content">
							<h3 id="r_head">Online Banking gives you convenient online access to your account information.<br>
							1st Source Online Banking, you can securely access your account information quickly and easily - 24/7.
							</h3>
							<ul id="list">
								<li>Use Bank-to-Bank Transfer</li><br>
								<li>See your account transactions and history</li><br>
								<li>Pay bills without writing checks</li><br>
								<li>Transfer money between your accounts</li><br>
								<li>Set up account alerts and reminders</li><br>
								<li>A convenient, engaging, and complete financial planning experience with Money Management™.</li><br>
								<li>Earn cash back with Purchase Rewards</li><br>
							</ul>
						</fieldset>
					</div>
				</div>
		</div>
	</body>
</html>