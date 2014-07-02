<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function UR_Start() 
{
        UR_Nu = new Date;
        UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
        document.getElementById("ur").innerHTML = UR_Indhold;
        setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{
        return (Value > 9) ? "" + Value : "0" + Value;
}

</script>
</head>
<body onload="UR_Start()">
<center>
<font id="ur" size="5" face="Trebuchet MS, Verdana, Arial, sans-serif" color="#DAD3B7"></font>
</center>
</body>
</html>
