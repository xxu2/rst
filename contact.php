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
                <h3>Sending us a message</h3>
                </div>
        <div class="inner" >

                <?php
                if ($_POST["email"]<>'') {
                $to = 'xxu@huskers.unl.edu';
                $subject = 'RC&IP contact form';
                $header = "From: ".$_POST["email"]."\r\n";
                $header .= "Reply-To: ".$_POST["email"]."\r\n";
                $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $body = "Name: ".$_POST["name"]."<br>";
                $body .= "Email: ".$_POST["email"]."<br>";
                $body .= "Comment: ".nl2br($_POST["message"])."";
                $success = mail($to, $subject, $body, $header) or die ("Failure");
                ?>

                <?php
                } else {
                ?>

                <?php
                if (isset($_POST['submit'])) {
                        header('Location: ' . basename($_SERVER['PHP_SELF']));
                        exit();
                        }
                ?>

                <form action="contact.php" method="post">
                Your name: <br>
                <input type="text" name="name" id="name" size="35" style="text-align:left";/> <br>
                Your email address: <br>
                <input type="text" name="email" id="email" size="35" style="text-align:left";/> <br>
                Your message: <br>
                <textarea type="textarea" name="message" style="width:255px;height:120px;"></textarea> <br>
                <input type="submit" name="submit" value="Send"/>
                </form>

                <?php
                };
                ?>

        </div>

                 <br>
                <div class="cleaner darkliner"> </div>
                <h3>Contact</h3>
                 <h4>Richard (Xiaoguang Xu)</h4>
                Earth and Atmospheric Sciences <br>
                University of Nebraska-Lincoln <br>
                P.O. Box 880340, Lincoln, NE 68588-0340 <br>
                voice: (402) 472-2663 <br>
                fax: (402) 472-4917 <br>
                <a href="mailto:xxu@huskers.unl.edu">xxu at huskers dot unl dot edu</a> <br>

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
