<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Demo</title>
</head>
<body>
    <a href="http://jquery.com/">jQuery</a>

    
    <center>
    <form method="post" name="blackbody" action=""> 
       
        Temperature &nbsp;&nbsp;: <input type="text" name="temp" value="300" size="10"/> &nbsp; K <br>

        Wavelength &nbsp;&nbsp;: <input type="text" name="lamda" value="4.0" size="10"/> &nbsp;&#181;m <br>

        <button onClick="Showresult();">Calculate</button>


    </form>
    </center>


    <center>
        <div id="xxxx"></div>
    </center>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
function Showresult()
{
        var temp = $("#temp").val();
        var lamda = $("#lamda").val();

        $.ajax({
                type: "POST",
                url: "xxxx.php", 
                data: dataString,
                cache: false,
                $("#submit_without_page_refresh_status").html('<div class="notice" align="left">Please enter your email address to proceed.</div>');

       })         
}
 

</script>


</body>
</html>
