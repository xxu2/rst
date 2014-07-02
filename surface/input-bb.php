<form method="post" name="blackbody" href="#">

        <style type="text/css">
        .left_col {text-align:right; padding:5px 20px; width:160px;}
        .right_col {text-align:left; padding:5px 0px;}
        </style>


        <br>
        <table>
        <tr>
                <td class="left_col">Temperature &nbsp;&nbsp;:</td>
                <td class="right_col"><input type="text" name="temp" value="300" size="10"/>&nbsp; K</td>
        </tr>
        
        <tr>
                <td class="left_col"> Wavelength &nbsp;&nbsp;:</td>
                <td class="right_col"> <input type="text" name="lamda" value="4.0" size="10"/> &nbsp;&#181;m </td>
        </tr>

        <tr>
                <td class="left_col"> Spectral band &nbsp;&nbsp;:</td>
                <td class="right_col"> 
                <input type="text" name="lowlamda" value="1.0" size="10"/> &nbsp;&#181;m to &nbsp;
                <input type="text" name="highlamda" value="12.0" size="10"/> &nbsp;&#181;m
                </td>
        </tr>
        </table>

        <br>
        <center><input type="submit" value="Calculate" onClick="hide('bboutput');show('bboutput');return false;"/></center>
</form>


<script type="text/javascript">
    function clicked() {
        alert('Currently not work, please try again in a few weeks.');
    }
</script>

<script type="text/javascript">

        function showresult() {
             document.getElementById('bboutput').style.display = '';
             return false;
        }

        function show(target){
                document.getElementById(target).style.display = 'block';
        }

        function hide(target){
                document.getElementById(target).style.display = 'none';
        }

</script>
