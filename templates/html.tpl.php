<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <!--Adding Google Fonts Exo 800-->
  <link href='https://fonts.googleapis.com/css?family=Maven+Pro:400' rel='stylesheet' type='text/css'>
  <?php print $styles; ?>
  <!-- Loading Google's jQuery Library from their CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 7]><script src="<?php print url(path_to_theme() . '/sparc_icon/lte-ie7.js', array('absolute' => TRUE)); ?>"</script><![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>

<!--Le Scripts to make page load faster-->
<?php print $scripts; ?>


</html>
