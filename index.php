<!DOCTYPE html>
<html>
<head>
        <?php include 'include/meta_head.php'; ?>
</head>

<body class="blackbg">

<div id="wrapper960" class="clearfix imagebg1"  style="height:820px;">

<?php $current="index"; include 'include/header.php'; ?>

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
        <div id="calc" style="border:1px solid <?php echo getbordercolor() ?>;">
                <center>
                <div id="screen">
                <h3>RS TOOLKIT</h3>
                </div>
                <div class="cleaner liner" style="margin:20px 0 10px 0;"> </div>
                <ul>
                <li><a href="scattering/rayleigh.php" class="active">Rayleigh</a> <p>Rayleigh scattering</p></li>
                <li><a href="scattering/mie.php" class="active">Mie</a> <p>Mie scattering</p></li>
                <li><a href="scattering/tmatrix.php" class="active">T-Matrix</a> <p>t-matrix scattering</p></li>
                <li><a href="inconstruction.php" class="nonactive">Gas Spectrum</a> <p>gaseous absorption</p></li>
                <li><a href="inconstruction.php" class="nonactive">Atmosphere</a> <p>atmospheric profile</p></li>
                <li><a href="inconstruction.php" class="nonactive">Solar</a> <p>Solar calculator</p></li>
                <li><a href="surface/blackbody.php" class="active">Blackbody</a> <p>blackbody radiation</p></li>
                <li><a href="inconstruction.php" class="nonactive">BRDF</a> <p>angular reflectance</p></li>
                <li><a href="inconstruction.php" class="nonactive">BPDF</a> <p>angular polarization</p></li>
                <li><a href="inconstruction.php" class="nonactive">RTM</a> <p>radiative transfer</p></li>
                <li><a href="inconstruction.php" class="nonactive">Lognormal</a> <p>lognormal convention</p></li>
                <li><a href="inconstruction.php" class="nonactive">Constants</a><p>relevant constants</p><li>
                <li><a href="inconstruction.php" class="nonactive">Units</a> <p>units conversion</p></li>
                <li><a href="inconstruction.php" class="active2">? Help</a> <p>&nbsp;&nbsp;</p></li>
                <ul>

                <div class="cleaner liner"> </div>
                <p style="text-align:left;">Image credit: NASA</p>
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
