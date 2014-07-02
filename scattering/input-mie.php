              <form action="../inconstruction.php" method="post">
                 <br>

                <table>
                <tr>
                <td class="left_col">Wavelength &nbsp;&nbsp;:</td> 
                <td class="right_col"><input type="text" name="number1" id="num1" value="0.55" size="10"/> &nbsp;&#181;m</td> 
                </tr>
                <tr>
                <td class="left_col">Refractive index &nbsp;&nbsp;:</td>
                <td class="right_col">
                        <input type="text" name="number2" id="num2" value="1.45" size="10"/> &nbsp; + &nbsp;
                        <input type="text" name="number3" id="num3" value="0.001" size="10"/> &nbsp; i <td>
                </tr>
                <tr>            
                <td class="left_col">Size range  &nbsp;&nbsp;:</td> 
                <td class="right_col">
                        <input type="text" name="number7" id="num7" value="0.01" size="10"/> &nbsp;&#181;m to &nbsp;
                         <input type="text" name="number8" id="num8" value="15.0" size="10"/> &nbsp;&#181;m <td>
                </tr>
                <tr>            
                <td class="left_col">Size distribution function &nbsp;&nbsp;:</td>
                <td class="right_col"> 
                        <SELECT id='select1' name='select1'>
                       <option value='1'>1: GAMMA with ALPHA and B given</option>";
                       <option value='2'>2: GAMMA with REFF and VEFF given</option>";
                       <option value='3'>3: Bimodal GAMMAS with 2 REFFs and same VEFF</option>";
                       <option value='4'>4: Lognormal with RG and SIGMA given</option>";
                       <option value='5' selected>5: Lognormal with REFF and VEFF given</option>";
                       <option value='6'>6: Power-Law with R1, R2 and ALPHA</option>";
                       <option value='7'>7: Modified-Gamma with ALPHA,GC,GAMMA given</option>";
                       <option value='8'>8: Modified-Gamma with ALPHA,B,GAMMA given</option>";
                       </SELECT> </td>
                </tr>
                <tr>            
                <td class="left_col">Size distribution parameters &nbsp;&nbsp;:</td>
                <td class="right_col">
                        <input type="text" name="number4" id="num4" value="0.2" size="10"/> &nbsp;&nbsp;
                        <input type="text" name="number5" id="num5" value="0.24" size="10"/> &nbsp;&nbsp;
                        <input type="text" name="number6" id="num6" value="0" size="10"/> </td>
                </tr>
                <tr>
                <td class="left_col">Optical depth &nbsp;&nbsp;:</td>
                <td class="right_col"><input type="text" name="number10" id="num10" value="0.5" size="10"/> &nbsp;&nbsp; (optional for volume calculation)</td>
                </tr>
                </table>
                <br>
                 <center><input type="submit" value="Calculate" onClick="calculate(); return false;"/></center>
              </form>
