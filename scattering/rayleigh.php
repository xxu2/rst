<!DOCTYPE html>
<html>
<head>
        <?php include '../include/meta_head.php'; ?>
</head>

<body class="darkbg">

<div id="wrapper960" class="clearfix imagebg3">

<?php $current="scattering"; include '../include/header.php'; ?>

<div id="content" class="clearfix nobg">

        <div id="subtitle">
                <h3><a href="rayleigh.php">Light Scattering in Atmosphere</a></h3>
        </div>
        <div id="subnav">
                <a href="rayleigh.php" class="current">Rayleigh</a>
                <a href="mie.php">Mie</a>
                <a href="tmatrix.php">T-Matrix</a>
        </div>

        <div class="cleaner darkliner"> </div>

        <div id="sidebar" class="left">
        <div class="inner">
               <h2>Rayleigh Scattering</h2>
               <p>When light encounters molecules in the air, the predominant mode of scattering is elastic scattering, called Rayleigh scattering. This scattering is responsible for the blue color of the sky; it increases with the fourth power of the frequency and is more effective at short wavelengths.</p>
                <br><br>
        </div>
        <br>

        <div class="inner">
        <h4>References:</h4>
        <br><br><br>
        </div>

        </div>

        <div id="main" class="right">
	<div class="inner roundbox4 frame">
           <h4 style="text-align:center;">INPUTS</h4>

                <style type="text/css">
                .left_col {text-align:right; padding:5px 20px; width:240px;}
                .right_col {text-align:left; padding:5px 0px;}
                </style>

                <form method="post" name="rayleigh" href="#">

                        <br>
                        <table>
                        <tr>
                        <td class="left_col">Wavelength &nbsp;&nbsp;:</td>
                        <td class="right_col"><input type="text" name="lamda" value="0.55" size="10";/> &nbsp;&#181;m<td>
                        </tr>
                        <tr>
                        <td class="left_col">Level pressure &nbsp;&nbsp;:</td>
                        <td class="right_col"><input type="text" name="pressure" value="1013.25" size="10";/> &nbsp;hPa<td>
                        </tr>
                        <td class="left_col">Account for molecular anisotropy &nbsp;&nbsp;:</td>
                        <td class="right_col">
                                <input type="radio" name="isotropy" id="aniso" value='1' checked> &nbsp; Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="isotropy" id="iso" value='1'> &nbsp; No
                        </td>
                        </tr>
                        </table>
                        <br>
                        <center><input type="submit" value="Calculate" onClick="calculate(); return false;"/></center>
                </form>
                <br>
                
        </div>
        <br>

        <div class="inner roundbox4 frame" style="min-height:300px;">
           <h4 style="text-align:center;">OUTPUTS</h4>

           <style type="text/css">
           table.rayleigh_tbl{}
           table.rayleigh_tbl td { text-align:right; padding:5px 20px; width:240px; }
           </style>

           <table class="rayleigh_tbl">
           <tr>
                <td>Scattering cross section &nbsp;&nbsp;:</td>
           </tr>
           <tr>
                <td>Optical depth &nbsp;&nbsp;:</td>
           </tr>
           <tr>
                <td>Scattering phase function &nbsp;&nbsp;:</td>
           </tr>

           </table>
           <br>
            <center>
            <form action="../inconstruction.php">
            <input type="submit" value="Retrieve data"/>
            </form>
            </center>
            <br>

       </div><br>
       </div>

</div>

<?php include '../include/extended.php'; ?>
</div>

<?php include '../include/footer.php'; ?>

</body>
</html>
