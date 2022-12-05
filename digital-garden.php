<!doctype html>
<html lang="en">
<head>
	<?php include 'includes/meta.html';?>
	<title>Digital Garden</title>
	<?php include 'includes/link.html';?>
	<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};
</script>

</head>
<body>
		<?php include 'includes/navbar-digital-garden.php';?>
	<header>
		<div class="jumbotron" id="holden-hardcastle">
			<div class="container">
    			<div class="row">
					<div class="col-md-6 col-md-offset-3">
        				<h1>Holden Hardcastle's Digital Garden</h1>
                   		<p>A collection of evolving ideas that aren't strictly organised by their publication date. They're inherently exploratory – notes are linked through contextual associations. They aren't refined or complete - notes are published as half-finished thoughts that will grow and evolve over time. They're less rigid, less performative, and less perfect than the personal websites we're used to seeing.</p>
  					</div>
                </div>
 			</div>
		</div>
	</header>
	<main>
		<!--section>
			<?php include 'archive/zip-drive.php';?>
		</section-->
        <section>
			<?php include 'archive/additional-materials.php';?>
		</section>
		<section>
			<?php include 'archive/removeable-cartridges.php';?>
		</section>
		<section>
			<?php include 'archive/design-issues.php';?>
		</section>
		<section>
			<?php include 'archive/inspiration.php';?>
		</section>
		<section>
			<?php include 'archive/sketchbook.php';?>
		</section>
		
    <?php include 'includes/footer-social.php';?>
</main>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="bootstrap/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!-- script src="js/bootstrap.min.js"></script--> 
</body>
</html>