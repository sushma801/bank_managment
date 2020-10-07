<html>
	<head></head>
	<style>
	#ref{
		color:white;
	}
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
	#content_right{
		padding-left:10%;
		color:lightblue;
	}
	#clickable{
		padding-left:5px;
		height:50%;
		max-width:96%;
		position:relative;
	}
	#clickable #img1{
		border-radius: 8px;
		vertical-align:middle;
	}
	#content_right{
		height:10%;
		width:96%;
		intial-scale:1;
	}
	#clickable #content_right{
		position:absolute;
		top:20;
		width:80%
		padding:25%;
	}
	#bottom_part{
		height:50%;
		width:97%;
	}
	#bottom_content{
		height:94%;
		width:96%;
	}
	#b_Content1{
		font: italic  bold 25px/30px Georgia, serif;
		padding-left:5%;
		color:#266E69;
	}
	#b_content2{
		font: italic 103% Georgia,serif;
		color:#266E69;
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
						<a href="viewCustomers.php" id="ref"><marquee direction="up" height=100% width=100% onmouseover="this.stop();" onmouseout="this.start();">
							View all Customer
						</marquee></a>
					</div>
					</fieldset>
				</div>
			</div>
			<div class="col">
				<div class="rightside">
					<div id="clickable">
						<img  id="img1"src="ibs3.png" width="100%" height="100%"></img>
						<div id="content_right">
							<a href="#bottom_part" id="ref">Click to read safe online Banking tips</a><br><br>
						</div>
					</div>
					<div id="bottom_part">
						<fieldset id="bottom_content">
							<h4 id="b_Content1"> Personal Banking</h4>
							<ul id="b_content2">
								<li>Personal Banking application proviedes features to administer and manage non personal accounts online.</li><br>
								<li>Online Bank or any of its representative never sends you E-mail/Message/Call you over phone to get your personal
								information, password.</li><br>
								<li>Any such E-mail/Message/Call is an attempt to fraudulently withdraw money from your account through Internet Banking. </li>
							</ul>
						</fieldset>
					</div>
				</div>
			</div>
		
		</div>
	</body>
</html>