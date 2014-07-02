<!DOCTYPE html>
<html>
<head>
	<title>Radiation Calculator</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Website Radiation Calculator" />
	<meta name="keywords" content="Radiation, Calculator, Optics" />
	<meta name="author" content="Xiaoguang Richard Xu" />
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,200|Droid+Sans' rel='stylesheet' type='text/css' />
	<link href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>style/style.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="js/base.js"></script>
</head>

<body class="darkbg">

<div id="wrapper960" class="clearfix imagebg3">

        <?php include 'include/header.php'; ?>

        <div id="content" class="clearfix">
	<h3>About RS TOOLKIT</h3>
        <p>REMOTE SENSING (RS) TOOLKIT is a website founded by Xiaoguang Xu on December 2013. It aims to provide radiation calculators for simple web-based calculation, so that users do not need to download and compile those programs. Because just started, we are currently working hard to develope the web-based interface for planed calculator.</p>

        <br>
        <h3>Team RS TOOLKIT</h3>
	<div class="cleaner liner"> </div>
        <a href="http://eas.unl.edu/~xxu" target="_blank">Xiaoguang Xu (Richard)</a> <br>
        <a href="http://zyang01.com" target="_blank">Zhifeng Yang (Bruce)</a> <br>
        <a href="http://eas.unl.edu/~ywang" target="_blank">Yi Wang</a>
        <br><br><br>
        </div>

        <?php include 'include/extended.php'; ?>

</div> 

<?php include 'include/footer.php'; ?>

</body>
</html>
