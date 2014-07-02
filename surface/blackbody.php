<!DOCTYPE html>
<html>
<head>
        <?php include '../include/meta_head.php'; ?>
</head>

<body class="darkbg">

<div id="wrapper960" class="clearfix imagebg3">

<?php $current="surface"; include '../include/header.php'; ?>

<div id="content" class="clearfix">

        <div id="subtitle">
                <h3><a href="blackbody.php">Reflectance and Emission by Surface</a></h3>
        </div>
        <div id="subnav">
                <a href="blackbody.php" class="current">Blackbody</a>
                <a href="../inconstruction.php">BRDF</a>
                <a href="../inconstruction.php">BPDF</a>
        </div>

        <div class="cleaner darkliner"> </div>

        <div id="sidebar" class="left">
                <div class="inner">
               <h2>Blackbody Radiation</h2>
               <p>The emitted radiance, radiance peak, and wavelength of peak are calculated for given temperature. The spectral and/or band radiances will also be caluclated by giving wavelength and spectral range, respectively. </p>
               <p>Used formulism: <br> &nbsp;&nbsp;- Planck function <br>&nbsp;&nbsp;- Stefan-Boltzmann Law<br>&nbsp;&nbsp;- Wien's Displancement Law </p>
                <br><br>
                </div>

        </div>

        <div id="main" class="right">
	<div class="inner roundbox4 frame">
           <h4 style="text-align:center;">INPUTS</h4>

                <?php include 'input-bb.php'; ?>             
                
           <br>
        </div>

        <br>

        <style type="text/css">
        table.bb_tbl{}
        table.bb_tbl td {text-align:right; padding:5px 20px; width:160px;}
        table.bb_tbl_show{}
        table.bb_tbl_show td {width:380px;text-align:left; padding:5px 0px;}
        </style>       

        <div class="inner roundbox4 frame">
           <h4 style="text-align:center;">OUTPUTS</h4>

                <div id="bboutput" style="display:none; float:right;" >
                        <table class="bb_tbl_show">
                        <tr>
                        <td><?php include '../calculators/test.php' ?></td>
                        </tr>
                        <tr>
                        <td><?php echo "UTC: ".time(); ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $_POST["lamda"]; ?></td>
                        </tr>
                        </table>
                </div>

           <table class="bb_tbl">
           <tr>
                <td>Radiance &nbsp;&nbsp;:</td>
           </tr>
           <tr>
                <td>Peak spectral radiance &nbsp;&nbsp;:</td>
           </tr>
           <tr>
                <td>Wavelength of peak &nbsp;&nbsp;:</td>
           </tr>
           <tr>
                <td>Spectral radiance &nbsp;&nbsp;:</td>
           </tr>
           <tr>
                <td>Band radiance &nbsp;&nbsp;:</td>
           </tr>
           </table>
           <br>

       </div><br>
       </div>

</div>

<?php include '../include/extended.php'; ?>
</div>

<?php include '../include/footer.php'; ?>

</body>
</html>
