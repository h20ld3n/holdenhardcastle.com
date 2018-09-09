<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Aspiring to create beautiful, exciting, and fun experiences by collaborating and working with inspired and driven companies, teams, and people.">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="Holden Hardcastle">
	<meta http-equiv="Cache-Control" content="max-age=200" />
    <meta name="pinterest" content="nopin" />
    <meta name="theme-color" content="#ffffff">
	<title>Holden Hardcastle</title>
	<script>!function(a,b,c,d,e){function g(a,c,d,e){var f=b.getElementsByTagName("script")[0];a.src=e,a.id=c,a.setAttribute("class",d),f.parentNode.insertBefore(a,f)}a.Mobify={points:[+new Date]};var f=/((; )|#|&|^)mobify=(\d)/.exec(location.hash+"; "+b.cookie);if(f&&f[3]){if(!+f[3])return}else if(!c())return;b.write('<plaintext style="display:none">'),setTimeout(function(){var c=a.Mobify=a.Mobify||{};c.capturing=!0;var f=b.createElement("script"),h="mobify",i=function(){var c=new Date;c.setTime(c.getTime()+3e5),b.cookie="mobify=0; expires="+c.toGMTString()+"; path=/",a.location=a.location.href};f.onload=function(){if(e)if("string"==typeof e){var c=b.createElement("script");c.onerror=i,g(c,"main-executable",h,mainUrl)}else a.Mobify.mainExecutable=e.toString(),e()},f.onerror=i,g(f,"mobify-js",h,d)})}(window,document,function(){a=/webkit|(firefox)[\/\s](\d+)|(opera)[\s\S]*version[\/\s](\d+)|(trident)[\/\s](\d+)/i.exec(navigator.userAgent);return!a||a[1]&&4>+a[2]||a[3]&&11>+a[4]||a[5]&&6>+a[6]?!1:!0},

	// path to mobify.js
	"//cdn.mobify.com/mobifyjs/build/mobify-2.0.16.min.js",

	// calls to APIs go here (or path to a main.js)
	function() {
	 		var capturing = window.Mobify && window.Mobify.capturing || false;

	  		if (capturing) {
    		Mobify.Capture.init(function(capture){
      		var capturedDoc = capture.capturedDoc;

      		var images = capturedDoc.querySelectorAll("img, picture");
      		Mobify.ResizeImages.resize(images);
        
      		// Render source DOM to document
      		capture.renderCapturedDoc();
    		});
  		}
	});</script>
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/glyphicons-social.css">
	<link rel="stylesheet" href="../css/glyphicons-filetypes.css">
    <link rel="stylesheet" type="text/css" href="../css/golden-ratio.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	
</head>
<body>
	<h1 style="display:none;">Holden Hardcastle</h1>
	<?php include '../includes/navbar.php';?>
	<header>
		<div class="jumbotron" id="holden-hardcastle">
			<div class="container">
    			<div class="row">
                </div>
 			</div>
		</div>
	</header>
	<main>
	<section>
  		<h2>CBS MarketWatch</h2>
  		<article>
    		<div class="jumbotron" id="mktw-black">
      			<div class="container-fluid">
        			<div class="row">
                    	<img src="../images/cbs-marketwatch.png" class="img-responsive">
                    </div>
      			</div>
    		</div>
    		<div class="container">
      			<div class="row">
                	<img src="../images/chevron-up.png"  alt="The ODU Theatre of the Absurd" class="img-responsive">
        			<div class="col-md-6 col-md-offset-3" id="description">
          				<h3>CBS MarketWatch</h3>
          				<p>Collaborated with news, and marketing teams to create online and printed materials.</p>
                    </div>
      			</div>
    		</div>
  		</article>
	</section>
    <?php include '../includes/footer.php';?>
</main>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="../bootstrap/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!-- script src="js/bootstrap.min.js"></script--> 
</body>
</html>