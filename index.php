<?php
if($_POST){
	$name = $_POST['name'];
	$content = $_POST['commentContent'];
	$handle = fopen("comments.html","a");
	fwrite($handle, "<b>" . $name . "</b>:<br/>" . $content . "<br/>");
	fclose($handle);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Learning Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	 <link type="text/css" rel="stylesheet" href="style1.css"/>
	 <link type="text/css" rel="stylesheet" href="style2.css"/>
	 <script type="text/javascript" src="script2.js"></script>
	<script type="text/javascript" src="js/jquery-2.2.4.min.js">	
	</script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js">
    </script>
</head>
<body class="body">
	<header class="mainHeader">
		<img src="nsbm.png" alt="nsbm">
		<h1 id="main-topic">E-Learning Management System</h1>

		<nav>
			<ul>
				<li class="active"><a href="#" >Desktop</a></li>
				<li><a href="#">Home</a></li>
				<li><a href="#">Desktop</a></li>
				<li><a href="#">Desktop</a></li>
				
				
			</ul>
		</nav>
	</header>

	<div class="mainContent">
		<div class="content">
		<article class="topContent">
			<content>
				<h1>Upcoming Events</h1>
				<div class="container">
            <div id="slideshow" class="cycle-slideshow" 
			data-cycle-fx = "fade"
			data-cycle-speed = "600"
			data-cycle-timeout = "3000"
			data-cycle-pager = "#pager"
			data-cycle-pager-template = "<a href='#'><img src='{{src}}' height=100 width=150/>"
			
			data-cycle-manual-fx = "scrollHorz"
			data-cycle-manual-speed = "400"
			data-cycle-pager-fx = "fade">
                <img src="images/nsbm1.jpeg" alt"nsbm" />
                <img src="images/nsbm2.jpeg" alt"nsbm" />
                <img src="images/nsbm3.jpeg" alt"nsbm" />
                <img src="images/nsbm4.jpeg" alt"nsbm" />
                <img src="images/nsbm5.jpeg" alt"nsbm" />

            </div>

            <div id="pager"></div>
                                     
        </div>


			</content>
		</article>



			<article class="middleContent">
			<content id="com">
			<figure id="fig1">

					<h3 id="com1">School Of Computing</h3>
					<p>The School of Computing is another main school at NSBM which provides world class training and education in Computing, Information Technology.</p>
					<img id="computing" src="images/com.jpg" alt"nsbm" onclick="window.open('Ashan/yearscomputing.php')"/>

				</figure>
					<figure id="fig2">

					<h3 id="com2">School Of Management</h3>
					<p>The School of Business of NSBM is the ideal institute for any undergraduate interested in pursuing a career in the Business field.  </p>
					<img id="computing" src="images/man.jpg" alt"nsbm" onclick="window.open('Ashan/yearsmanagement.php')"/>

				</figure>
					<figure id="fig3">

					<h3 id="com3">School Of Engineering</h3>
					<p>The School of Engineering offers degrees in Computer Engineering and Electronics in collaboration with the internationally acclaimed universities.</p>
					<img id="computing" src="images/engi.jpg" alt"nsbm" onclick="window.open('Ashan/yearsengineering.php')"/>

				</figure>	

				</figure>
					<figure id="fig4">

					<h3 id="com4">E-Library</h3>
					<p>This is a new concept for the learning management system in NSBM.This is still progressing ,this is a little demo of e-library system</p>
					<img id="computing" src="images/lib.png" alt"nsbm" onclick="window.open('Ashan/library.php')" />

				</figure>	
			</content>
		</article>

	<article class="bottomContent">
			<header>
				<h2><a href="#" title="first post">Comments:</a></h2>
				<p>If you have any problem regarding this modules ,you can post a text message on here.Mention your name also!!!</p>
			</header>

		


			<content>
			<form action="" method="post">
					<label>Name: <br><input type="text" name="name"><br></label>
					<label>Message:<br><textarea cols="35" rows="5" name="commentContent"></textarea></label>

					<input type="submit" name="post" value="post">
						
			</form>
			<?php include 'comments.html'; ?>
					

			</content>
	</article>
		</div>
	</div>

	<aside class="top-sidebar">
		<article>
			<h2>Date</h2>
			<div id="calender">
				<p id="calender-day"></p>
				<p id="calender-date"></p>
				<p id="calender-month-year"></p>
			</div>

		</article>
	</aside>

	<aside class="middle-sidebar">
		<article>
			<h2>middle sidebar</h2>
			<p>Welcome to the PictureMatix Photography Event Management System.</p>
		</article>
	</aside>

	<aside class="bottom-sidebar">
		<article>
			<h2>bottom sidebar</h2>
			<p>Welcome to the PictureMatix Photography Event Management System.</p>
		</article>
	</aside>

		<aside class="third-sidebar">
		<article>
			<h2>third sidebar</h2>
			<p>Welcome to the PictureMatix Photography Event Management System.</p>
		</article>
	</aside>

	<aside class="fourth-sidebar">
		<article>
			<h2>fourth sidebar</h2>
	
		</article>
	</aside>

	<footer class="mainfooter">
		<p>Copyright @ National School of Business Management No 309, High Level Road, Colombo 05, Sri Lanka.
Telephone: +94(11) 567 2545|5673535 - Email:info@nsbm.lk</p>
	</footer>
</body>
</html>