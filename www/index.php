<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1260">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Anantara Vacation Club Activator</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	.lngbox .gstfrm_chckbox input.chckbx {position: absolute;left: 0;top: 0;margin: 0;width: 100%;height: 100%;opacity: 0;z-index: 5;   cursor: pointer;}
	.lngbox .btn.frmbutn{border: 1px solid #b3a358;background: #f8f5e8;color: #716936;font-size: 12px;font-weight: 500; text-transform: uppercase;height: 40px;padding: 0 20px;position: relative;z-index: 1;transition: all 0.5s ease-in-out 0s;}
	.lngbox .btn.frmbutn.active{border: 1px solid #f26f21; background: #f26f21; color: #fff; transition: all 0.5s ease-in-out 0s;}
	</style>
</head>
  <body>
    <div class="animsition front_animation">
        <div class="front_container">
            <div class="imgbox" style="background:url(assets/images/front_image.jpg) top center no-repeat; background-size:cover;"></div>
            <div class="front_rightbox">
            	<div class="loginbox">
                	<div class="logobox"><img src="assets/images/front_logo.png" alt=""></div>
                    <div class="lngbox">
                        <form action="#" method="post" id="langForm">
                        	<input type="hidden" name="lang" id="hidlang" />
                            <div class="lng_title"><h4>Select Language</h4></div>                            
                            <div class="gstfrm_chckbox">
                                <input type="radio" class="chckbx enjoy-list" name="lang" value="en">
                                <input type="button" class="btn frmbutn " name="" value="English">
                            </div>
                            <div class="gstfrm_chckbox">
                                <input type="radio" class="chckbx enjoy-list" name="lang" value="chn">
                                <input type="button" class="btn frmbutn " name="" value="Chinese">
                            </div>
                            <div class="gstfrm_chckbox">
                                <input type="radio" class="chckbx enjoy-list" name="lang" value="jpn">
                                <input type="button" class="btn frmbutn " name="" value="Japanese">
                            </div>
                        </form>	
                        <div class="lng_title"><h4>Select Mode</h4></div>                            
                            <div class="gstfrm_chckbox">
                                <input type="radio" class="chckbx enjoy-list" name="lang" value="trmode">
                                <input type="button" class="btn frmbutn " name="" value="Training mode ">
                            </div>
                            <div class="gstfrm_chckbox">
                                <input type="radio" class="chckbx enjoy-list" name="lang" value="prmode">
                                <input type="button" class="btn frmbutn " name="" value="Presentation mode ">
                            </div>                            	
                    </div>                    
                </div>
            </div>
        </div>
    </div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
	$( "#langForm .gstfrm_chckbox .chckbx" ).click(function(e) {
		$('.gstfrm_chckbox .chckbx').next().removeClass('active');
		$(this).next().addClass('active');
	});
	});
	</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
