
<!DOCTYPE html>
<html>
<head>
	<title>test1</title>
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
				<li><a href="#">Desktop</a></li>
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


					<img id="computing" src="images/com.jpg" alt"nsbm" />

				</figure>
					<figure id="fig2">
					<img id="computing" src="images/man.jpg" alt"nsbm" />

				</figure>
					<figure id="fig3">
					<img id="computing" src="images/engi.jpg" alt"nsbm" />

				</figure>	
			</content>
		</article>

	<article class="bottomContent">
			<header>
				<h2><a href="#" title="first post">Comments:</a></h2>
			</header>

		


			<content>
					

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
			<h2>News</h2>
			<p>You can find our latest news via above link.</p>
			<a href="http://nsbm.lk/news">NSBM News</a>
		</article>
	</aside>

	<aside class="bottom-sidebar">
		<article>
			<h2>Upcoming Events</h2>
			<p>There are no upcoming events</p>
			<p><a href="">GO TO CALENDAR...</a></p>
			<p><a href=""></a>NEW EVENT...</p>
		</article>
	</aside>

	<footer class="mainfooter">
		<p>Copyright @ National School of Business Management No 309, High Level Road, Colombo 05, Sri Lanka.
Telephone: +94(11) 567 2545|5673535 - Email:info@nsbm.lk</p>
	</footer>
</body>
</html>