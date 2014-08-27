<?php 
$ToEmail = 'wrap@hdu.no';
//$ToEmail = 'marius@kassett.no';
$senderEmail = "".$_POST["email"]."";
$EmailSubject = 'Kunstikit.no'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Navn/kunstner: ".$_POST["name"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
$MESSAGE_BODY .= "Adresse: ".$_POST["adresse"]."<br>";
$MESSAGE_BODY .= "Postnr: ".$_POST["postnummer"]."<br>";
$MESSAGE_BODY .= "Sted: ".$_POST["sted"]."<br>";
$MESSAGE_BODY .= "Telefonnr: ".$_POST["telefonnr"]."<br><br>";
$MESSAGE_BODY .= "Navn p&aring; gruppe/initiativ: ".$_POST["gruppenavn"]."<br>";
$MESSAGE_BODY .= "Kort beskrivelse av kunstner/gruppe: ".$_POST["kunstnerbeskrivelse"]."<br>";
$MESSAGE_BODY .= "Ut&oslash;vere: ".$_POST["utovere"]."<br>";
$MESSAGE_BODY .= "Andre (beskriv funksjon): ".$_POST["andre_utovere"]."<br><br><br>";

$MESSAGE_BODY .= "Jeg/vi vil f&aring; tilsendt pakken: ".$_POST["bestill-pakken"]."<br>";
$MESSAGE_BODY .= "Jeg/vi vil melde oss p&aring; workshop: ".$_POST["bestill-workshop"]."<br>";
$MESSAGE_BODY .= "-------------Trondheim: ".$_POST["workshop-trondheim"]."<br>"; 
$MESSAGE_BODY .= "-------------Tromso: ".$_POST["workshop-tromso"]."<br>"; 
$MESSAGE_BODY .= "-------------Stavanger: ".$_POST["workshop-stavanger"]."<br>";
$MESSAGE_BODY .= "-------------Bergen: ".$_POST["workshop-bergen"]."<br><br>";
$MESSAGE_BODY .= "Jeg/vi vil soke om recidency p&aring; Wrap i Bergen 2011/2012: ".$_POST["recidency"]."<br><br>"; 
$MESSAGE_BODY .= "Jeg/vi vil vise et arbeid p&aring; en eller flere Kunstikit festivaler: ".$_POST["fremfore"]."<br>";
$MESSAGE_BODY .= "-------------Forste prioritet: ".$_POST["fremfore_1"]."<br>"; 
$MESSAGE_BODY .= "-------------Andre prioritet: ".$_POST["fremfore_2"]."<br>"; 
$MESSAGE_BODY .= "-------------Tredje prioritet: ".$_POST["fremfore_3"]."<br>"; 
$MESSAGE_BODY .= "-------------Fjerde prioritet: ".$_POST["fremfore_4"]."<br><br>";
$MESSAGE_BODY .= "Andre byer jeg vil presentere i:<br />-------------Trondheim: ".$_POST["aktuell_by_trondheim"]."<br>";
$MESSAGE_BODY .= "-------------Tromso: ".$_POST["aktuell_by_tromso"]."<br>"; 
$MESSAGE_BODY .= "-------------Stavanger: ".$_POST["aktuell_by_stavanger"]."<br>"; 
$MESSAGE_BODY .= "-------------Bergen: ".$_POST["aktuell_by_bergen"]."<br>"; 
$MESSAGE_BODY .= "-------------Oslo: ".$_POST["aktuell_by_oslo"]."<br><br>"; 
$MESSAGE_BODY .= "Ca lengde p&aring; forestilling/performance til festival: ".$_POST["ca_lengde_forestilling"]."<br>"; 
$MESSAGE_BODY .= "Tekniske krav: ".$_POST["tekniske_krav"]."<br><br>"; 
/*$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"])."<br>"; */
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Oooops feil");
mail($senderEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>

	<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Kunst i Kit - Pakken</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>

<body>

  <div id="container">
    <div id="header" >
<div id="logo"><a href="index.html"><img src="img/Logo/logo1b.png" alt="logo1b" width="376" height="202" /></a></div>
<div id="menu">
<ul>
<li><a href="pakken.html">Pakken</a></li>
<li><a href="workshops.html">Workshops</a></li>
<li><a href="produksjon.html">Produksjon</a></li>
<li><a href="festivaler.html">Festivaler</a></li>
<li><a href="omwrap.html">WRAP / Kontakt</a></li>
</ul>
</div>
<div id="menyBestilling"><a class="jegvilhapakken" href="skjema.html">Ja, jeg vil ha pakken!</a></div>
    </div> <!-- /container -->
    <div id="main" role="main">


<div id="pakken" class="cushycms">
<h2 class="cushycms">Takk!</h2>
<p class="cushycms">Mail skal n&aring; v&aelig;re sendt!</p>
<p>Kopi skal v&aelig;re sendt til e-posten du oppga.</p>
<br />
</div>

<div id="sponsorer"><span>Prosjektet er st&oslash;ttet av:</span>
<img src="img/logoer/Bergen_Klogo.png" alt="Bergen_Klogo" width="" height="" />
<img src="img/logoer/fflob.png" alt="fflob" width="" height="" />
<img src="img/logoer/Tromsokommune.png" alt="Tromsokommune" width="" height="" />
<img src="img/logoer/Trondheim_kommune.png" alt="Trondheim_kommune" width="" height="" />
<img src="img/logoer/dnkf.png" alt="dnkf" width="" height="" />
</div> <!-- /sponsorer -->

    </div>
    <footer>

    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
  


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script>
  $('div.tempo1').scrollingParallax({
    staticSpeed : 3,
    staticScrollLimit : false
});
  $('div.tempo2').scrollingParallax({
    staticSpeed : 5,
    staticScrollLimit : false
});

  $('div.tempo3').scrollingParallax({
    staticSpeed : 2,
    staticScrollLimit : false
});

</script>


  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>