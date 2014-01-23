<!DOCTYPE html>
<html dir="<?php print $language->dir; ?>" class="<?php print $classes; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:700,400,900' rel='stylesheet' type='text/css'>  
  <?php print $scripts; ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".associated").hide();
        $(".trigger").click(function(){
          $(this).toggleClass("active").next().slideToggle("medium");
        });
      });
    </script>  
</head>
<body class="pane body tne" <?php print $attributes;?>>
   <?php include "includes/header-imr.inc"; ?>
   <?php print $page; ?>
   <?php //include "includes/main-article.php"; ?>
   <?php include "includes/globalnavbar.inc"; ?>
    
    
  
  
  <?php //print $page_top; ?>
  <?php //print $page; ?>
  <?php //print $page_bottom; ?>
</body>
</html>