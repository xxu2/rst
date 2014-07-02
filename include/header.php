<div style="width:500px;">
<div id="title" class="clearfix">
 	<h1><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>index.php">Romote Sensing Toolkit</a></h1>
</div>
</div>

<div id="header" class="clearfix grad1 roundbox4">

        <ul id="menu">
        <li>
                <a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>index.php" class="first grad1">RS TOOLKIT</a>
                <ul>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php">News</a></li>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>about.php">About</a></li>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>contact.php">Contact</a></li>
                 <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php">Q&A</a></li>
                </ul>

        </li>
        <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>scattering/rayleigh.php" class="between grad1 <?php if ($current=="scattering") echo 'current'; ?>">Scattering</a>
        <ul> 
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>scattering/rayleigh.php">Rayleigh</a></li>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>scattering/mie.php">Mie</a></li>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>scattering/tmatrix.php">T-matrix</a></li>
        </ul>
        </li>
        <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php" class="between grad1 <?php if ($current=="absorption") echo 'current'; ?>">Absorption</a></li>
        <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php" class="between grad1 <?php if ($current=="atmosphere") echo 'current'; ?>">Atmospheric</a></li>
        <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>surface/blackbody.php" class="between grad1 <?php if ($current=="surface") echo 'current'; ?>">Terrestrial</a>
        <ul>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>surface/blackbody.php">Blackbody</a></li>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php">BRDF</a></li>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php">BPDF</a></li>
        </ul>
        </li>
        <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php" class="between grad1 <?php if ($current=="rtm") echo 'current'; ?>">Radiative Transfer</a></li>
        <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php" class="between grad1 <?php if ($current=="inverse") echo 'current'; ?>">Inverse Problem</a></li>
        <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>links.php" class="last grad1 <?php if ($current=="misc") echo 'current'; ?>">Misc.</a>
        <ul>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>inconstruction.php">Solar</a></li>
                <li><a href="<?php $hostname = "http://" . getenv('HTTP_HOST') ."/"; echo $hostname;?>links.php">Links</a></li>
        </ul>
        <li>
        </ul>

</div>

