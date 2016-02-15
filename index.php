<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<script>
// image fade in
function imgLoaded(img){
    var $img = $(img);
 
    $img.parent().addClass('loaded');
};

</script>

<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/glyphicons-social.css">
<link rel="stylesheet" type="text/css" href="css/golden-ratio.css">

</head>
<body>
<h1 style="display:none;">Holden Hardcastle</h1>
<header>
  <div class="jumbotron" id="holden-hardcastle">
    <div class="container-fluid">
      <div class="row">
        <h1>Holden Hardcastle (1.61803.3.5)</h1>
        <h2>Aspiring to create beautiful, exciting, and fun experiences by working with inspired and driven people.</h2>
        <!-- h3>Creating inspired experiences is achieved through the hard work of teams and individuals who aspire to be the best</h3-->
        <p>During my professional career I have worked with content teams at Apple, Amazon, Sony, Barnes &amp; Noble, HBO and Lucasfilm. Collaborated with authors, editors and artists to create best selling ebooks; led teams on community and brochure site redesigns, created mock ups and other assets for on-line properties; worked with outside vendors to develop systems and workflows for on-line content distribution; set standards for best-in-class DVDs and downloadable content; and have taken lead roles on high profile campaigns.</p>
      </div>
    </div>
  </div>
</header>
<main>
<section>
  <h2>Advanced Energy Economy</h2>
  <article>
    <div class="jumbotron" id="aee-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/aee-letterhead.png" alt="Advanced Energy Economy Brand and Style Guide" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"><img src="images/chevron-up.png" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>Advanced Energy Economy Letterhead&nbsp;&amp;&nbsp;Branding</h3>
          <p>Advanced Energy Economy engages with companies in order to create a more prosperous world that runs on secure, clean and affordable energy.</p>
          <p>The design values complement the company vision. The brand guidelines aim to create a consistent, clean, and efficient experience. This solid foundation allows for evolution. Corporate logos, iconography, infographics, reports, responsive websites, and members of the AEE team, have all played a part in the progression of the Advanced Energy Economy brand.</p>
        </div>
      </div>
    </div>
  </article>
  <article>
    <div class="jumbotron" id="aee-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/aee-initiatives.png"  alt="Advanced Energy Economy Responsive Website" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> <img src="images/chevron-up.png" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>AEE Website and Process Redesign</h3>
          <p>In order to create a prosperous future, Advanced Energy Economy (AEE) envisions a world that runs on secure, clean, and affordable energy. AEE engages member companies, and recruits partners through education, and encourages participation in energy policy changing initiatives.</p>
         <p>Policy and legislation changes quickly. In order to keep up emerging energy regulations, the AEE website needed to be redesigned and migrated to a content management system (CMS). By implementing a CMS, projects leads would able to make timely content updates.</p> 
          <p>Working with the communications, marketing and development teams we identified and implemented specific improvements on both the front and backend.</p>
          <p>By building templates on a flexible and responsive Bootstrap foundation, we made content updates more efficient and streamlined the look and feel of the site.</p>       
        </div>
      </div>
    </div>
  </article>
  <article>
    <div class="jumbotron" id="aee-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/aee-covers.png"  alt="Advanced Energy Economy & AEE Institute Reports" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> <img src="images/chevron-up.png" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>Advanced Energy Economy&nbsp;Reports</h3>
          <p>The educational reports focus on the technical, economic, social, and political issues surrounding advanced energy, and how to improve the energy sector. To engage member companies the reports are available for download, distributed at events, and presented at congressional hearings.</p>
          <p>By collaborating with the communications team and project leads we implemented the newly established brand guidelines to define and apply consistent hierarchy and visual style to reports. Covers, the subject of much debate among the various teams, communicate the subject of the complex reports in a single image.</p> 
          <p>Using a grid system and dynamically linking text to design files, the annual and semi-annual reports are effortlessly designed and produced. The powerful imagery and iconography create a visual message that accelerates the transition to an advanced energy economy.</p>
          <p>The California Advanced Energy Emplyment Survey report won a 2016 American Graphic Design Award.</p>
        </div>
      </div>
    </div>
  </article>
  <article>
    <div class="jumbotron" id="aee-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/aee-ohio-electricity-future.png" alt="Ohio's Electricity Future Report" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"><img src="images/chevron-up.png" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>Ohio's Electricity Future Report</h3>
          <p>The Ohio Advanced Energy Economy, an Advanced Energy Economy State Partner, was looking to create brand guidlines and an annual report that appealed to their members. They reached out to AEE to create impactful design standards that represented their messaging.</p>
          <p> A logo, font face, and collateral were structured around the&nbsp;established AEE design guidelines. The newly created brand visually identified Ohio as part of the extended AEE family.</p>
          <p>The report on the state of Ohio's Electricity Future won a 2016 American Graphic Design Award.</p>
        </div>
      </div>
    </div>
  </article>
  <article>
    <div class="jumbotron" id="aee-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"><img src="images/aee-infographics.png" alt="AEE and AEE Institute Infographics" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"><img src="images/chevron-up.png" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>AEE and AEE Institue Infographics</h3>
          <p>Advanced Energy Economy initiative leads present data and reports to companies and legislatures across all levels of government. Infographics are created to present complex information and tell the story behind the energy data in an easily understandable way.</p>
          <p>Working with communications and initiative leads, we distilled complex data down to identify key messaging. The resulting visuals are designed to support arguments that move executives and government officials to action.</p>
          <p>The North Carolina: Clean Energy Works! and California Advanced Energy Employment Future infographics both won 2016 American Graphic Design Awards.</p>
        </div>
      </div>
    </div>
  </article>
</section>
<section>
  <h2>Gap Old Navy</h2>
  <article>
    <div class="jumbotron" id="old-navy-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/gap-old-navy-email.png" alt="Old Navy Online Email Campaigns" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> <img src="images/chevron-up.png"  alt="Advanced Energy Economy & AEE Institute Reports" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>Online Email Campaigns</h3>
          <p>Old Navy is in constant communication with their customers. The marketing and creative teams foster relationships through email and online campaigns. The campaigns are centered around new products, promotions, and sales.</p>
          <p>Weekly marketing and design meetings allow for open collaboration and exploration. Production artists, designers, copy editors, art directors, and team leads are encouraged to discuss new ideas and fine tune project briefs, and even update style guides for targeted online email campaigns.</p>
        </div>
      </div>
    </div>
  </article>
</section>
<section>
  <h2>Dictionary.com</h2>
  <article>
    <div class="jumbotron" id="dictionary-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/dictionary.png" alt="Dictionary.com Search Results Redesign" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"><img src="images/chevron-up.png"  alt="Advanced Energy Economy & AEE Institute Reports" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>Hyperbole Search Results Redesign</h3>
          	<p>Dictionary.com is committed to accelerating the discovery and mastery of English in all its forms. As the world's leading digital resource for language success, they were looking for solutions to increase the awareness of their expanding product and increase revenue without compromising their primary vision.</p>
			<p>Focusing on the the goal of increasing awareness and revenue, advertising and promotion needed be a more prominent part of the search results. Playing on the idea, "if you look up , hyperbole, in the dictionary, you'll find a picture of...", companies could have exclusivity to words. So when Lexus, launches their new "Hyperbole", they might want to buy "hyperbole" for the duration of the launch.</p>
			<p>The responsive, grid based mock up works within the established style and brand guidelines to call out the exclusive promotions and ads, while the search result or word remains the primary focus through established typographical hierarchy.</p>
        </div>
      </div>
    </div>
  </article>
</section>
<section>
  <h2>Chronicle Books</h2>
  <article>
    <div class="jumbotron" id="chronicle-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/trueblood.png" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> <img src="images/chevron-up.png"  alt="Advanced Energy Economy & AEE Institute Reports" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>TrueBlood Cookbook</h3>
          <p>In order to surprise and delight it's readers and reach a new audiences, Chronicle Books began converting it's entire catalogue into digital or eBooks in 2010.</p>
          <p>eBooks have been around since 1998, with the release The Softbook and Gemstar’s Rocket eBook Reader. It wasn't until Apple debuted the iPad twelve years later in 2010, and sold half a million ebooks in a month that Chronicle Books took notice.</p>
          <p>In order to algin with the publisher's core values, we established a culture of experimentation that allowed mistakes and happy accidents to find the limitations what we could and could not do with technology.</p>
        </div>
      </div>
    </div>
  </article>
  <article>
    <div class="jumbotron" id="chronicle-blue">
      <div class="container-fluid">
        <div class="row"> <img src="images/the-ultimate-metallica.png" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> <img src="images/chevron-up.png"  alt="Advanced Energy Economy & AEE Institute Reports" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>The Ultimate Metallica</h3>
          <p>Working with outside vendors we established base styles and CSS. Thousands of InDesign files were sent for conversion. Initial translations were delivered back to the Chronicle Team, based on guidelines and any additional specs related to titles. The device agnostic content would be fined tuned by embedding fonts, altering images, and adding other design elements.</p>
          <p>High profile titles, authors, subject matter, and content require meeting to set expectations, and to learn or revisit the intent of the original material. High profile authors and content partners, like HBO, would need to be made educated about the capabilities of the technology, and how each of the varied devices would display their content.</p>
        </div>
      </div>
    </div>
  </article>
  <article>
    <div class="jumbotron" id="chronicle-blue">
      <div class="container-fluid">
        <div class="row img_wrapper"><img src="images/history-of-surfing.png" class="img-responsive" onload="imgLoaded(this)"/> </div>
      </div>
    </div>
    <div class="container">
      <div class="row"> <img src="images/chevron-up.png"  alt="Advanced Energy Economy & AEE Institute Reports" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>The History Of Surfing</h3>
			<p>The working relationships and open communication established with Amazon, Apple, and other on-line retailers allowed us to work with their internal development teams to create content for respective emerging technologies ahead of product launches.</p>
            <p>By working openly as an internal team, and collaborating with outside vendors we were able to deliver device agnostic eBooks that surprised and delighted new and larger audiences across a variety of devices.</p>        </div>
      </div>
    </div>
  </article>
</section>
<section>
  <h2>TRX | Fitness Anywhere</h2>
  <article>
    <div class="jumbotron" id="trx-bg">
      <div class="container-fluid">
        <div class="row img_wrapper"> <img src="images/trx-drew-brees-app.png" class="img-responsive" onload="imgLoaded(this)"/></div>
      </div>
    </div>
    <div class="container">
      <div class="row"><img src="images/chevron-up.png"  alt="Advanced Energy Economy & AEE Institute Reports" class="img-responsive">
        <div class="col-md-6 col-md-offset-3" id="description">
          <h3>Website, Application, and Experience Design</h3>
			<p>In order to connect owners, and users of the TRX Suspension Trainer to gyms, trainers, and each other, Fitness Anywhere was looking to move away from producing single workouts distributed on DVDs. The application, online community, and sport specific workout landing pages were all designed to encourage users to find other places and people to workout out with.</p>
            <p>The internal team of production artists, designers, developers, marketing leads, and program directors all contributed to wireframes, layouts, look and feel, and the eventual style guide that was born out of the extensive retooling of the site.</p>
            <p>Partnering with Drew Brees, the Quarterback for the NFL's New Orleans Saints and 2010 Super Bowl MVP, the application, and community launch, website update were part of a fitness campaign encouraging users of similar interest, and fitness goals to get out from in front of the television, and connect with other people in the community.</p>
        </div>
      </div>
    </div>
  </article>
</section>
<footer>
<div class="jumbotron">
<div class="container-fluid">
  <div class="row text-muted">
    <div class="col-md-3">
      <p>
      <h3>About H2</h3>
      During my professional career I have worked with content teams at Apple, Amazon, Sony, Barnes & Noble, HBO and Lucasfilm; collaborated with authors, editors and artists to create best selling ebooks; led teams on community and brochure site redesigns, created mock ups and other assets for on-line properties; worked with outside vendors to develop systems and workflows for on-line content distribution; set standards for best-in-class DVDs and downloadable content; and have taken lead roles on high profile campaigns.
      <h3>Contact<!--, Downloads--> &amp; Other Sites</h3>
      <a href="mailto:h0ld3n@gmail.com"><span class="social social-e-mail"></span>h0ld3n@gmail.com</a><br>
      <!-- span class="social social-behance"></span>about me<br--> 
      <!-- span class="social social-behance"></span>behance<br--> 
      <!-- span class="social social-dribbble"></span>dribble<br--> 
      <a href="https://www.facebook.com/holden.hardcastle" target="new"><span class="social social-facebook"></span>facebook</a><br>
      <a href="https://github.com/h20ld3n" target="new"><span class="social social-github"></span>github</a><br>
      <!-- span class="social social-google-plus"></span>google+<br--> 
      <a href="https://www.instagram.com/h20ld3n/" target="new"><span class="social social-instagram"></span>instagram<br>
      <a href="https://www.linkedin.com/in/holdenhardcastle" target="new"><span class="social social-linked-in"></span>linkedin</a><br>
      <!-- span class="social social-linked-in"></span>localsolo<br--> 
      <!-- span class="social social-pinterest"></span>pinterest<br--> 
      <!--span class="social social-tumblr"></span>tumblr<br--> 
      <!--span class="social social-twitter"></span>twitter<br--> 
      <!--resume<br--> 
      <!--cargo collective<br--> 
      <!--dunked (beta)-->
      </p>
    </div>
    <div class="col-md-3">
      <p>
      <h3>Education</h3>
      <h4>Griffith University</h4>
      Master of Arts – Media Production with&nbsp;Honours
      <h4>Old Dominion University</h4>
      Bachelor of Fine Arts – Graphic Design Cum Laude
      <h3>Knowledge</h3>
      Adobe Photoshop, ImageReady, Illustrator, AfterEffects, InDesign, GoLive, Flash, Quark, Dreamweaver and other HTML editors, HTML/CSS/XHTML/PHP and JavaScript, Avid, Final Cut Pro and All Related Software
      <h3>Awards</h3>
      <h4>American Graphic Design Awards 2015</h4>
      Advanced Energy Now 2015 Market Report<br>
      California Advanced Energy Employment Future<br>
      Ohio's Electricity Future<br>
      North Carolina: Clean Energy Works!<br>
      Advanced Energy Leads California Jobs Growth
      <h4>PubWest Book Design Awards 2012</h4>
      Enhanced e-Book, Silver Award<br>
      Worse Case Scenario Jr. Interactive Adventure: Everest: You Decide How to Survive
      <h4>41st Annual Bookbuilders West Book Show 2012</h4>
      Certificate of Excellence<br>
      Worst-Case Scenario Ultimate Adventure: Everest
      <h4>Publishing Innovation Awards2012</h4>
      Quality, Excellence, Design (QED)<br>
      Count, Dagmar!<br>
      Top Pot Hand-Forged Doughnuts
      <h4>The 48 Hour Film Project 2009</h4>
      Best Acting Ensemble
      <h4>Griffith Film School 2006</h4>
      Award for Individual Excellence and Highly Commended Editing
      </p>
    </div>
    <div class="col-md-6">
      <p>
      <h3>Experience</h3>
      <h4>Advanced Energy Economy</h4>
      (07.2013 - Present)<br>
      Responsible for visual and brand presence of Advanced Energy Economy.
      <h4>Gap Inc. (freelance)</h4>
      (06.2013 - 07.2013)<br>
      Lead by positive and involved creative leadership, collaborated with copywriters, designers and marketing teams to create and support on-line and email campaigns.
      <h4>Chronicle Books</h4>
      (12.2010 - 02.2013)<br>
      Collaborated with authors, editors, designers, and outside vendors to create award-winning ebooks and mobile applications, for various tablets and ebook readers. Formulated best practices and strategies for the creation and distribution of ebooks to various on-line retailers.
      <h4>TRX - Fitness Anywhere</h4>
      (02.2007 – 07.2010)<br>
      Worked with various teams to develop best practices for content creation and distribution, user interaction and experience for online communities, various landing pages and large scale campaigns with the assistance of other designers and marketing managers.
      <h4>REO Company</h4>
      (12.2002 – 01.2005)<br>
      Worked with photographers, printers, and other vendors to design a consistent online and marketing presence.
      <h4>US Race Series (freelance)</h4>
      (10.2002 – 01.2005)<br>
      Designed logos and marketing materials for national campaigns.
      <h4>Golden Gate Tennis and Swim Club (freelance)</h4>
      (08.2002 – 10.2003)<br>
      Designed the athletic club's monthly newsletter.
      <h4>Muscular Dystrophy Association (freelance)</h4>
      (09.2001 – 12.2002)<br>
      Collaborated with marketing directors to create collateral for local fund-raising events.
      <h4>Steven Irving Photography (freelance)</h4>
      (09.2001 – 12.2002)<br>
      Designed and developed website for the then San Francisco based photographer.
      <h4>California Academy of Science (freelance)</h4>
      (08.2001 – 12.2001)<br>
      Designed and coded website for the Arthropods of Madagascar Research Project.
      <h4>CBS MarketWatch</h4>
      (10.1999 – 05.2001)<br>
      Collaborated with news, and marketing teams to create online and printed materials.
      </p>
    </div>
  </div>
</div>
<!--div style="text-align:center"> &copy;
        <?php 
  		$fromYear = 1977; 
  		$thisYear = (int)date('Y'); 
  		echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?>
        Holden Hardcastle </div>
    </div-->
</footer>
</main>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="bootstrap/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!-- script src="js/bootstrap.min.js"></script--> 
</body>
</html>