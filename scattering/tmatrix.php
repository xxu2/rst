<!DOCTYPE html>
<html>
<head>
        <?php include '../include/meta_head.php'; ?>
</head>

<body class="darkbg">

<div id="wrapper960" class="clearfix imagebg3">

<?php $current="scattering"; include '../include/header.php'; ?>

<div id="content" class="clearfix">

        <div id="subtitle">
                <h3><a href="rayleigh.php">Light Scattering in Atmosphere</a></h3>
        </div>
        <div id="subnav">
                <a href="rayleigh.php">Rayleigh</a>
                <a href="mie.php">Mie</a>
                <a href="tmatrix.php" class="current">T-Matrix</a>
        </div>

        <div class="cleaner darkliner"> </div>

        <div id="sidebar" class="left">
        <div class="inner">
               <h2>T-Matrix Scattering Method</h2>
               <p>The optical properties of particles are calculated given the particle size distribution, shape, and complex refractive index.</p>
                <br><br>
        </div>
        </div>

        <div id="main" class="right">

        <style type="text/css">
        .left_col {text-align:right; padding:5px 20px; width:200px;}
        .right_col {text-align:left; padding:5px 0px;}
        </style>

	<div class="inner roundbox4 frame">
           <h4 style="text-align:center;">INPUTS</h4>

                <?php include 'input-tmatrix.php'; ?>             
                
           <br>
        </div>

        <br>
        <div class="inner frame roundbox4">

           <h4 style="text-align:center;">OUTPUTS</h4>

                <table>
                <tr>
                <td class="left_col">Extiction cross section &nbsp;&nbsp;:</td>
                </tr>
                <tr>
                <td class="left_col">Scattering cross section &nbsp;&nbsp;:</td>
                </tr>
                <tr>
                <td class="left_col">Geometric cross section &nbsp;&nbsp;:</td>
                </tr>
                <tr>
                <td class="left_col">Single scattering albedo &nbsp;&nbsp;:</td>
                <tr>
                <td class="left_col">Effective radius &nbsp;&nbsp;:</td>
                </tr>
                <tr>
                <td class="left_col">Effective variance &nbsp;&nbsp;:</td>
                </tr>
                <tr>
                <td class="left_col">Total volume &nbsp;&nbsp;:</td>
                </tr>
                </table>

                <br>
                <center>
                <form action="../inconstruction.php">
                <input type="submit" value="Retrieve data"/>
                </form>
                </center>
                <br>


       </div></br>
       </div>

</div>

<?php include '../include/extended.php'; ?>
</div>

<?php include '../include/footer.php'; ?>

</body>
</html>
