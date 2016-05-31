<?php
include_once 'inc/db.connect.php';
include_once 'inc/functions.php';
include_once 'inc/protect.php';
include_once 'inc/translator.php';
require_once 'inc/Mobile_Detect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1260">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$lang["default"]["siteTitle"];?></title>

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="css/colorbox.css" />
    <?php $detect = new Mobile_Detect;
	// Any tablet device.
	if( $detect->isTablet() ){ ?>
  <link rel="stylesheet" href="css/tablet.css" />
		<?php } ?>
        <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false) { ?>
        <style type="text/css">
        @media only screen and ( max-width: 1600px ){.wlcom_page{ top:50px;} .inr_midsection{ top:0;} .inr_midsection.guest_adjust{ padding-top:25px;} .overlay_menu_inr{ padding-top:197px;} }
		</style>
        <?php } ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php $bodyId = SetBodyId(); ?>
<body class="<?=$bodyId;?> common_wraper">  