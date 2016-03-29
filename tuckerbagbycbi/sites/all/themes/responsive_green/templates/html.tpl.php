<?php
/**
 * @file
 * Responsive Green theme's implementation to display the basic html
 * structure of a single Drupal page.
 */
?>

<!DOCTYPE html>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
    <a href="../template.php"></a>
  <?php print $page; ?>
    <a href="page.tpl.php"></a>
  <?php print $page_bottom; ?>
</body>
</html>
