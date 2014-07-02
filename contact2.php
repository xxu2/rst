<!DOCTYPE html>
<html>
<head>
        <?php include 'include/meta_head.php'; ?>
</head>

<body class="darkbg">

<div id="wrapper960" class="clearfix imagebg3">

<?php $current="contact"; include 'include/header.php'; ?>


<br>
<br>
<div id="content" class="clearfix">

        <div style="float:left;width:300px; height:330px;background-color:none;padding-left:20px;" class="roundbox4 frame">
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

                <h3>Sending us a message</h3>
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
	</div>


        <div style="float:right;width:560px; height:330px;padding-left:20px;" class="roundbox4 frame">
        <div class="inner" >

        <center>
        <br><h3>Contact information</h3><br>
  
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

        <?php include 'include/extended.php'; ?>
</div>



<?php if ($success) { ?>
                <script type="text/javascript">
                alert("Your message was sent, we will be back to your shortly.");
                history.back();
                </script>
<?php
        $success = 0;};
?>  


<?php include 'include/footer.php'; ?>

</body>
</html>
