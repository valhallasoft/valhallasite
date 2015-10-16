<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
        
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
        <link href="css/charisma-app.css" rel="stylesheet">
        <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
        <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
        <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
        <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
        <link href='css/jquery.noty.css' rel='stylesheet'>
        <link href='css/noty_theme_default.css' rel='stylesheet'>
        <link href='css/elfinder.min.css' rel='stylesheet'>
        <link href='css/elfinder.theme.css' rel='stylesheet'>
        <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='css/uploadify.css' rel='stylesheet'>
        <link href='css/animate.min.css' rel='stylesheet'>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection"> 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.yacal.css">
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/ckeditor/ckeditor.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.yacal.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"> </script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body >
<div class="container" id="page" >
 <div class="navbar navbar-default" role="navigation" style="margin-bottom:0px;border: none solid transparent">
   <div class="navbar-inner" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/headerK.png);width: 100% ;">
      <a > <img width=100 src="<?php echo Yii::app()->request->baseUrl; ?>/images/Blog.png" ><b style="font-family:courier;font-size:150%;color: white;" ><?php echo CHtml::encode(Yii::app()->name);?> </b>
      </a>
      <div class="btn-group pull-right">
         <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
         <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo Yii::app()->user->username."(".Yii::app()->user->name.")" ; ?></span>
         <span class="caret"></span>
         </button>
         <ul class="dropdown-menu">
             <li><a href="index.php?r=admin/vusers&pk=<?php echo Yii::app()->user->id;?>">Profile</a></li>
            <li class="divider"></li>
            <li><a href="index.php?r=admin/logout">Logout</a></li>
        </ul>
      </div>
    </div>
 </div>
<div style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/b.png);color:white;padding: 0px 45px 5px 45px;height:20px; "> 
    <div align="right" style="float:right;padding: 2px; " >
        <a href="http://www.facebook.com/riotdesign.eu" target="_blank" class="fa fa-facebook"> </a>&nbsp;
        <a href="http://www.facebook.com/riotdesign.eu" target="_blank" class="fa fa-github"> </a>&nbsp;
        <a href="http://www.facebook.com/riotdesign.eu" target="_blank" class="fa fa-youtube"> </a>&nbsp;
    </div>
</div> 
<div class="clear"></div>
<div style="padding: 20px">
<div class="row">
        <?php echo $content; ?>   
    </div>
</div>
<div id="footer">
	Copyright &copy; <?php echo date('Y'); ?> by INF;Code.<br/>
	All Rights Reserved.<br/>
</div><!-- footer -->

</body>
<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

</html>
