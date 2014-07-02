<?php 

if     ($calc=="11"){$calc_id="blackbody.php"; $calc_name="Blackbody"; $calc_long="blackbody radiation"; $act="active";}
elseif ($calc=="21"){$calc_id="inconstruction.php";$calc_name="Atmosphere";$calc_long="atmospheric profiles";$act="nonactive";}
elseif ($calc=="31"){$calc_id="inconstruction.php";$calc_name="BRDF";$calc_long="angular reflectance";$act="nonactive";}
elseif ($calc=="41"){$calc_id="inconstruction.php";$calc_name="Units";$calc_long="units conversion";$act="nonactive";}
elseif ($calc=="12"){$calc_id="mie.php";$calc_name="Mie/T-Matrix";$calc_long="Mie/t-matrix scattering";$act="active";}
elseif ($calc=="22"){$calc_id="inconstruction.php";$calc_name="Gas Spectrum";$calc_long="gaseous absorption";$act="nonactive";}
elseif ($calc=="32"){$calc_id="inconstruction.php";$calc_name="BPDF";$calc_long="angular polarization";$act="nonactive";}
elseif ($calc=="13"){$calc_id="inconstruction.php";$calc_name="Rayleigh";$calc_long="Rayleigh scattering";$act="nonactive";}
elseif ($calc=="23"){$calc_id="inconstruction.php";$calc_name="RTM";$calc_long="radiative transfer";$act="nonactive";}
elseif ($calc=="33"){$calc_id="inconstruction.php";$calc_name="Lognormal";$calc_long="lognormal convention";$act="nonactive";}
elseif ($calc=="43"){$calc_id="inconstruction.php";$calc_name="? Help";$calc_long="&nbsp;&nbsp;";$act="active2";}
?>
<form action="<?php echo $calc_id ?>">
<button type="submit" id="<?php echo $act ?>"><h5><?php echo $calc_name ?></h5></button>
</form>
<p><?php echo $calc_long ?></p>

