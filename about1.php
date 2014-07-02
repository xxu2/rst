<!DOCTYPE html>
<html>
<head>
        <?php include 'include/meta_head.php'; ?>
</head>

<body class="blackbg">

<div id="wrapper960" class="clearfix imagebg1" style="height:820px;">

<?php include 'include/header.php'; ?>

        <div style="float:left;">
        <br>
        <h3>Eduation and research tools <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for remote sensing of Earth environments</h3>
        </div>


        <?php function getbordercolor() 
                {$colors = array('Gray', 'Gold', 'Crimson', '#0066cc', 'Limegreen');
                 $rand = array_rand($colors);
                 return $colors[$rand];
                }
        ?>
        <div align='right'>
        <div id="calc" style="border:1px solid <?php echo getbordercolor() ?>;height:680px;">
                <center>
                <div id="screen">
                <h3>ABPUT RS TOOLKIT</h3>
                </div>
                <div class="cleaner liner" style="margin:20px 0 10px 0;"> </div>
                <p>REMOTE SENSING (RS) TOOLKIT is a website founded by Xiaoguang Xu on December 2013. It aims to provide radiation calculators for simple web-based calculation, so that users do not need to download and compile those programs. Because just started, we are currently working hard to develope the web-based interface for planed calculator.</p>

                 <br>
                <h3>TEAM RS TOOLKIT</h3>
                <div class="cleaner liner"> </div>
                <a href="http://eas.unl.edu/~xxu" target="_blank">Xiaoguang Xu (Richard)</a> <br>
                <a href="http://eas.unl.edu/~ywang" target="_blank">Yi Wang</a>
                <a href="http://zyang01.com" target="_blank">Zhifeng Yang (Bruce)</a> <br>
                <br><br><br>

                </center>        
                
        </div>
        </div>

</div>
<div id="wrapper960" class="clearfix">

        <?php include 'include/extended.php'; ?>

</div> 

        <?php include 'include/footer.php'; ?>

</body>
</html>
