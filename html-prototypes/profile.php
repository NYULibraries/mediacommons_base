<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>In Media Res Sample Post | Navigation Demo</title>
  <!-- Using Google Web Font Loader to load fonts instead of Stylesheet -->
  <!--link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'--> 
  <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Droid+Sans:400,700:latin', 'Droid+Serif:400,700,400italic,700italic:latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); 
  </script>
  <link rel="stylesheet" href="../css/mediacommons_base.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include "includes/header-imr.inc"; ?>
<?php include "includes/main-profile.php"; ?>
<?php include "includes/globalnavbar.inc"; ?>
<footer role="contentinfo">
  <ul role="menu">
    <li role="menuitem"> <a href="#">Copyright/Fair Use Policy</a> </li>
    <li role="menuitem"> <a href="mailto:editors@mediacommons.futureofthebook.org">Help</a> </li>
    <li> <a href="#">About</a> </li>
  </ul>
  <p> <span class="extras">In Media Res: A <a href="http://mediacommons.futureofthebook.org/">MediaCommons</a> Project</span><br>
    <span class="powered">Powered by NYU <a href="http://dlib.nyu.edu">DLTS</a></span> </p>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="../js/underscore-min.js"></script>

<script src="../js/mc.js"></script>
</body>
</html>