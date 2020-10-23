
<!DOCTYPE html>

 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Magazine &mdash; Free Fully Responsive HTML5 Bootstrap Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">



	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
			<!-- 	<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul> -->
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="index.html">Magazine <sup>TM</sup></a></h1>
				</div>

			</div>
		
		</div>

	</header>
	<!-- END #fh5co-header -->
	
      <section id="items"></section>
	<footer id="fh5co-footer">
		<p><small>&copy; 2020.</small> All Rights Reserverd. <br> <span class="text-info">Designed by Saif Mahmud Khan Dourjoy</span> </p>
	</footer>


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script type="text/javascript">
	$( document ).ready(function() {
        $.ajax({
            url: "https://content.guardianapis.com/search?api-key=e0bcc8e6-24ae-4dbb-8697-0ae7542da04c",
            type: "get",
            dataType: 'json',
            success: function(data) {

            	var data=data.response.results;
            	// console.log(data);
            var output='<div class="container"><div class="row">'	;
	          
	          for(var i=0; i<data.length;i++){
	          	output+='<div class="col-md-3"><div class="card" style="width: 18rem; height:400px"><div class="card-body"><h5 class="card-title">'+data[i].webTitle+'</h5><h6 class="card-subtitle mb-2 text-muted">'+data[i].webPublicationDate+'</h6><p class="card-text">'+data[i].sectionName+'</p><a href="'+data[i].webUrl+'" class="btn btn-info">Full News</a></div></div></div>';
	          }
			

			output+='</div></div>';

			$('#items').html(output);

            }
        })
});
	</script>

	</body>
</html>

