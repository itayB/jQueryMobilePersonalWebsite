<!DOCTYPE html>

<head>
	<title>Itay Bittan's Home Page</title>
	<meta name="description" content="This site summerize some of my academic, volunteer and leisure works. ">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
</head>


<body>
	<?php include_once("analyticstracking.php") ?>
	
	<div id="page1" data-role="page" data-rockncoder-jspage="page1">
		<header data-role="header" data-position="fixed">
			<h1>Itay Bittan's Home Page</h1>
		</header>
		
 		<script type="text/template" id="template-dialog">
			<div data-role="page">
				<div data-role="content" data-theme="c">
					<h2>This site is no longer maintained.</h2>
					<p>Please refer to the new site.</p>
					<a href="http://itaybittan.herokuapp.com" data-role="button" data-theme="b">Take me to the new site!</a>       
					<a href="#" data-role="button" data-rel="back" data-theme="c">Stay here</a>    
				</div>
		   </div>
        </script>

		<section data-role="content">
			<div class="content-secondary">
				<div data-role="collapsible-set">				
					<div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
						<h3>Academic work</h3>
						<div >
							<ul data-role="listview">
								<li>
									<a href="GPS.html" class="ui-link-inherit">
										<p class="ui-li-aside ui-li-desc"><strong>4th</strong> Year</p>
										<h3 class="ui-li-heading">GPS Signals Simulation In Urban Canyons</h3>
										<p class="ui-li-desc"><strong>The purpose of this project is to simulate the multipath behavior of GPS signals in urban canyons.</strong></p>
										<p class="ui-li-desc">Given a 3D map of buildings in preprocessing phase, and given a receiver and a satellite locations in query time, we want to check the existence of LOS (line of sight) between them and to calculate the signals multipath.</p>
									</a>
								</li>
								<li>
									<a href="WEBForum.html" class="ui-link-inherit">
										<p class="ui-li-aside ui-li-desc"><strong>3th</strong> Year</p>
										<h3 class="ui-li-heading">WEB Forum</h3>
										<p class="ui-li-desc"><strong>Workshop on Software Engineering Project.</strong></p>
										<p class="ui-li-desc">This project is about creating standard web foroum, contains all common features.</p>
									</a>
								</li>
								<li>
									<a href="Memory.html" class="ui-link-inherit">
										<p class="ui-li-aside ui-li-desc"><strong>3th</strong> Year</p>
										<h3 class="ui-li-heading">Memory Management Simulation</h3>
										<p class="ui-li-desc"><strong>This project simulate the management of memory in a multi-process environment.</strong></p>
										<p class="ui-li-desc">The simulator include: Main Memory, Disk, Memory Management Unit (MMU), Page Replacement Manager (PRM) and more.</p>
									</a>
								</li>
								<li>
									<a href="Compiler.html" class="ui-link-inherit">
										<p class="ui-li-aside ui-li-desc"><strong>3th</strong> Year</p>
										<h3 class="ui-li-heading">Compiler Construction</h3>
										<p class="ui-li-desc"><strong>This is a compiler from Scheme to low C.</strong></p>
										<p class="ui-li-desc">Include major components of the compiler: Syntactic analysis, semantic analysis, and code generation.</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
						<h3>Volunteer</h3>
						<div >
							<ul data-role="listview">
								<li>
									<a href="OpenKnessetMobile.html" class="ui-link-inherit">
										<p class="ui-li-aside ui-li-desc"><strong>2012</strong></p>
										<h3 class="ui-li-heading">Open Knesset Mobile</h3>
										<p class="ui-li-desc"><strong>The Public Knowledge Workshop first project.</strong></p>
										<p class="ui-li-desc">---</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
						<h3>Leisure</h3>
						<div >
							<ul data-role="listview">
								<li>
									<a href="TripCalc.html" class="ui-link-inherit">
										<p class="ui-li-aside ui-li-desc"><strong>2012</strong></p>
										<h3 class="ui-li-heading">Trip Calculator</h3>
										<p class="ui-li-desc"><strong>Android native application.</strong></p>
										<p class="ui-li-desc">Summarizes current expenses to your local currency.</p>
									</a>
								</li>								
								<li>
									<a href="FinancePlus.html" class="ui-link-inherit">
										<p class="ui-li-aside ui-li-desc"><strong>2012</strong></p>
										<h3 class="ui-li-heading">Finance+</h3>
										<p class="ui-li-desc"><strong>C# Windows application.</strong></p>
										<p class="ui-li-desc">---</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			
			<div id="page1Chart" class="content-primary">
				<div style="margin:20px;">
					<!-- The trick is that there are two images, one on each page  -->
					<p>
						<strong>About me: </strong> 
						<ul>
							<li>I'm software engineer at <a href="http://www.audiocodes.com" target="_blank">AudioCodes</a>.</li> 
							<li>Graduated (B.Sc) from <a href="http://www.bgu.ac.il" target="_blank">Ben Gurion university</a>.</li>
							<li>This site contains some of my personal works.</li>
							<li>Enjoy!</li>
						</ul>
					</p>
					<a href="http://il.linkedin.com/in/itaybittan" target="_blank" data-role="button" data-corners="false" data-mini="true" data-inline="true"><img src="images/LinkedIn-Logo.png" /></a>
					<a href="http://github.com/itayb" target="_blank" data-role="button" data-corners="false" data-mini="true" data-inline="true"><img src="images/Github.png" /></a>
					<a href="http://stackoverflow.com/users/1011253/itayb" target="_blank" data-role="button" data-corners="false" data-mini="true" data-inline="true"><img src="images/StackoverflowLogo.png" /></a>
				</div>
			</div> 

	    </section>
		<footer data-role="footer" data-position="fixed">
			<center>
				<p style="font-size:70%">© 2013 Itay Bittan website. This site developed in <a href="http://jquerymobile.com/" target="_blank">jQuery mobile</a> and hosted by <a href="http://www.000webhost.com/" target="_blank">000webhost</a>.</p>
			</center>
		</footer>
	</div>
	
    <div id="page2" data-role="page" data-rockncoder-jspage="page2">
		<header data-role="header" data-position="fixed">
			<h1>Image</h1>
		</header>
		<section data-role="content">

		</section>
		
		<footer data-role="footer" data-position="fixed">
			<h1>Itay Bittan home page</h1>
		</footer>
	</div>
	
	<script src="/app.js" type="text/javascript"></script>
 <script>
$( document ).ready(function(){
    setTimeout('showDialog()',2000);
});

function showDialog() {
   var dialog = $( $( "#template-dialog" ).html() ); //actually i'm using here sg like this: _.template( $( "#template-dialog" ).html(), propObject );
 
   dialog.dialog()
            .appendTo( document.body );
        $.mobile.changePage( dialog, { transition: "pop", role: "dialog", reverse: false }  );
}
 </script>
 </body>
 

 </html>

