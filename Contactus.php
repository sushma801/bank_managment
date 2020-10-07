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
		.container {
			position: relative;
			width: 100%;
		}
		.overlay {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0,0,0,0.6);;
			overflow: hidden;
			width: 0;
			height: 100%;
			transition: .5s ease;
		}
		.container:hover .overlay {
			width: 50%;
			margin-left:25%;
			margin-top:15%;
		}
		.text {
			color: white;
			font-size: 20px;
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			white-space: nowrap;
		}
		
		#image{
			margin-left:30%;
			margin-top:15%;
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
							<div class="container">
								<img src="contact.png" id="image" height="50%" width="35%">
								<div class="overlay">
									<div class="text">
										Name:SUSHMA KUMARI SHAW<br>
										E-mail:sushmashaw801@gmail.com<br>
										Contact No:90886XXXXX<br>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
		</div>
	</body>
</html>