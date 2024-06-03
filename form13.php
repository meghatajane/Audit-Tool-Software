<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  $a= $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"];
  $d= $_POST["d"];
  $e= $_POST["e"];
  $f= $_POST["f"];
  $g= $_POST["g"];
  $h= $_POST["h"];
  $i= $_POST["i"];
  $j= $_POST["j"];
  $k= $_POST["k"];
  $l= $_POST["l"];
  $m= $_POST["m"];
  $n= $_POST["n"];
  $o= $_POST["o"];
  $p= $_POST["p"];
  $q= $_POST["q"];
  $r= $_POST["r"];
  $s= $_POST["s"];
  $t= $_POST["t"];
  $u= $_POST["u"];
  $v= $_POST["v"];
  $w= $_POST["w"];
  $x= $_POST["x"];
  $y= $_POST["y"];
  $z= $_POST["z"];
  $aa= $_POST["aa"];
  $bb= $_POST["bb"];
  $cc= $_POST["cc"];
  $dd= $_POST["dd"];
  $ee= $_POST["ee"];
  $ff= $_POST["ff"];
  $gg= $_POST["gg"];
  $hh= $_POST["hh"];
  $ii= $_POST["ii"];
  $jj= $_POST["jj"];
  $kk= $_POST["kk"];
  $ll= $_POST["ll"];
  $mm= $_POST["mm"];
  $nn= $_POST["nn"];
  $oo= $_POST["oo"];
  $pp= $_POST["pp"];
  $qq= $_POST["qq"];
  $rr= $_POST["rr"];
  $ss= $_POST["ss"];

  $sql = "INSERT INTO form13 (a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,aa,bb,cc,dd,ee,ff,gg,hh,ii,jj,kk,ll,mm,nn,oo,pp,qq,rr,ss) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$bb','$cc','$dd','$ee','$ff','$gg','$hh','$ii','$jj','$kk','$ll','$mm','$nn','$oo','$pp','$qq','$rr','$ss')";
    $result = mysqli_query($conn,$sql);
      if ($result){
        $showAlert = true;
      }
}
?>
<!DOCTYPE html>
<html>
<style>
 div {
  background-color: rgb(247, 241, 245);
  width: 1300px;
  border: 15px solid rgb(129, 47, 91);
  padding: 50px;
  margin: 15=px;
}
.container .btn:hover {
  background-color: black;
  color: white;}
  img {
  opacity: 0.5;
}

img:hover {
  opacity: 1.0;
}

</style>
<body>
  
<h1>M.KOTHARI TECHNO ASSOCIATES</h1>
<h2> Form 13</h2>
<h4>(See rules 65 and 73-A)</h4>
<h2>Report of Examination of Pressure Plant/Vessel/Gasholder</H2>
<div>

     <form action="/Harry/form13.php" method="POST">
     <label for="a">Certificate NO :</label>
     <input type="number" class="form-control" id="a"  name="a"/>
<br>
<br>
     <label for="b">PV. No. :</label>
     <input type="number" class="form-control" id="b"   name="b"/>
   <br>
   <br>
   <hr>
   <br>
     <label for="c"> 1.Name and address of factory :</label>
     <input type="text" class="form-control" id="c"   name="c"/>

   <br>

    <label for="d">2.Name,description and distinctive number of the Pressure Plant/Vessel/Gasholder</label>
    <input type="text" class="form-control" id="d"   name="d"/>
   <br> 
   <br>
    <label for="e">3. Name and address of maker.</label>&nbsp;
    <input type="text" class="form-control" id="e"   name="e"/> 
  <br>
  <br>
    <label for="f">4. Nature of process in which Pressure Plant /Vessel is Used.</label>
    <input type="text" class="form-control" id="f"   name="f"/>
      <br>
      <br>
     <label for="Particular of Plant">5. Particular of Plant /Vessel :</label>
     <br>                                                             
    <label for="g "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A. Date of Construction</label>
    <input type="date" class="form-control" id="g"   name="g"/>
      <br>
      <label for=" h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B. Thickness of walls</label>
      <input type="text" class="form-control" id="h"   name="h"/>
    <br>
    <label for="i">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C. Date on which it was first taken into use</label>
    <input type="date" class="form-control" id="i"   name="i"/>
   <br>
   <label for="j">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D. Safe working pressure recommended by maker</label>
   <input type="text" class="form-control" id="j"   name="j"/>
      <br> 
      <br>
      <label for="Particular of Plants">5(A). Particular of Plants/Vessel/Gasholder: </label>
      <br>
    <label for="k">&nbsp;&nbsp;&nbsp;A. Parts of the gas-holder examined by electronics or otherbaccurate devices or by cutting sample discs and result there of</label>
    <input type="text" class="form-control" id="k"   name="k"/>
        <br>
    &nbsp;&nbsp;&nbsp;<label for="Particular as to the condition ">B. Particular as to the condition of -</label>
   <br>
   <label for="l">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i) Crown</label>
   <input type="text" class="form-control" id="l"   name="l"/>
          <br>
   <label for="m">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ii) Side sheeting including grips and cups</label>
   <input type="text" class="form-control" id="m"   name="m"/>
         <br>
   <label for="n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(iii) Guiding mechanism (roller carriages,roller pins,guide,ropes,etc.)</label>
   <input type="text" class="form-control" id="n"   name="n"/>
          <br>
   <label for="o">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(iv) Tank</label>
   <input type="text" class="form-control" id="o"   name="o"/>
          <br>
   <label for="p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(v) Other structure, if any, columns(framing and bracking)</label>
   <input type="text" class="form-control" id="p"   name="p"/>
          <br>
          &nbsp;&nbsp;&nbsp;<label for="q">C. Particular as to the position of the lift at the time of examination.</label>
          <input type="text" class="form-control" id="q"   name="q"/>
          <br>
   &nbsp;&nbsp;&nbsp;<label for="r">D. Particular as to whether the tank and lifts were found sufficiently level for safe working.</label>
    <input type="text" class="form-control" id="r"   name="r"/>
             <br>  
             <br>
   <label for="Date of">6. Date of:</label>
   <br>
   &nbsp;&nbsp;&nbsp;<label for="s">A. Last External Examination</label>
   <input type="date"  class="form-control" id="s"   name="s"/>
   <br>
   &nbsp;&nbsp;&nbsp;<label for="t">B. Last Internal Examination</label>
   <input type="text"  class="form-control" id="t"   name="t"/>
   <br>
   &nbsp;&nbsp;&nbsp;<label for="u">C. Last Hydraulic  Examination</label>
   <input type="date" class="form-control" id="u"   name="u"/>
   <br>
   &nbsp;&nbsp;&nbsp;<label for="v">D. Last Ultrasonic test</label>
   <input type="date" class="form-control" id="v"   name="v"/>
   <br>
   <br>
   <label for="w">6(A). By whom it is carried out ?</label>
   
   <option value="By Manish M KOTHARI ">By Manish M KOTHARI</option>
    <option value="By Mahendra KOTHAR ">By Mahendra KOTHARI</option>
    <input type="text" class="form-control" id="w"   name="w"/>
    <br>
    <br>
    <label for="x">7. Whether lagging was removed for purpose of examination</label>
     <input type="text" class="form-control" id="x"   name="x"/>
     <br>
     <br>
     <label for="Description of examination ">8. Description of examination carried out and findings-</label>
     <br>
     <br>
     <label for="y">&nbsp;&nbsp;&nbsp;I. External examination[give reason if it is not carried out six monthly].</label>
     <input type="text" class="form-control" id="y"   name="y"/>
     <br>
     <label for="z">&nbsp;&nbsp;&nbsp;II. Internal examination[give reason if it is not carried out six monthly]</label>
     <input type="text"  class="form-control" id="z"   name="z"/>
     <br>
     <label for="aa">&nbsp;&nbsp;&nbsp;III. Hydraulic test[give reason if this is not carried out at interval of 2 years or 4 years]</label>
     <input type="text"  class="form-control" id="aa"   name="aa"/>
     <br>
     <label for="bb">&nbsp;&nbsp;&nbsp;VI. Ultrasonic test[Please quote number and date of the certificate issued by Chief inspector,Permitting ultrsonic test in lieu of internal examination and hydraulic test].</label>
     <input type="text"  class="form-control" id="bb"   name="bb"/>
     <br>
     <br>
     <label for="cc">9. Safe working pressure calculated as per methods give in sub-rule 5(c) (ii) for sizing cylinders -(1) (2) (3)</label>
     <input type="text"  lass="form-control" id="cc"   name="cc"/>
     <br>
     <br>
    <label for="Conditions of Pressure ">10. Conditions of Pressure Plant-</label>
    <br>
    <label for="dd">&nbsp;&nbsp;&nbsp;A. Vessel</label>
    <input type="text" class="form-control" id="dd"   name="dd"/>
    <br>
    <label for="ee">&nbsp;&nbsp;&nbsp;B. Piping</label>
    <input type="text" class="form-control" id="ee"  name="ee"/>
    <br>
    <label for="Conditions of fittings">11. Conditions of fittings and appliances-</label>
    <br>
    <br>
    <label for="ff">&nbsp;&nbsp;&nbsp;I. Pressure gauges</label>
    <input type="text" class="form-control" id="ff"   name="ff"/>
    <br>
    <label for="gg">&nbsp;&nbsp;&nbsp;II. Safety Valve</label>
    <input type="text" class="form-control" id="gg"   name="gg"/>
    <br>
    <label for="hh">&nbsp;&nbsp;&nbsp;III. Stop valve</label>
    <input type="text" class="form-control" id="hh"   name="hh"/>
    <br>
    <label for="ii">&nbsp;&nbsp;&nbsp;IV. Reducing Valve[give reasons if not necessary].</label>
    <input type="text" class="form-control" id="ii"   name="ii"/>
    <br>
    <label for="jj">&nbsp;&nbsp;&nbsp;V. Additional safety valva[required in case reducing valve is necessary].</label>
    <input type="text" class="form-control" id="jj"   name="jj"/>
    <br>
    <label for="kk">&nbsp;&nbsp;&nbsp;VI. Other devices [please specify particularly in case of jacketed vessels]</label>
    <input type="text" class="form-control" id="kk"   name="kk"/>
    <br>
    <label for="ll">&nbsp;&nbsp;&nbsp;VIII. Are the fitting and appliances properly maintained and in good condition, repairs if any required and period within they should be executed.</label>
    <input type="text" class="form-control" id="ll"  name="ll"/>
    <br>
    <br>
    <label for="mm">12. Safe working pressure recommended after examination [specify the allowance made for conditions of working such as heat, corrosion etc].</label>
    <input type="text" class="form-control" id="mm"   name="mm"/>
    <br>
    <br>
    <label for="nn">13. Specify repairs if any and period within which they should be executed.</label>
    <input type="text" class="form-control" id="nn"  name="nn"/>
    <br>
    <br>
    <label for="oo">14. Specify reduced working pressure pending repairs.</label>
    <input type="text"  class="form-control" id="oo"  name="oo"/>
    <br>
    <br>
    <label for="pp">15. Other observation/condition subject to which the plant is to be operated.</label>
    <input type="text"  class="form-control" id="pp"   name="pp"/>
    <br>
    <hr>
<br>
<br>
<label for="qq">I certify that on the pressure plant/vessel describe above was thorougly cleaned and (so far as its construction permits) made
    accessible for thorough examination and for such tests as were necessary for thorough examination and that on the said date. I thoroughly examined this pressure
    vessel/plant including its fitting and that the above is a true report of my examination.
    <input type="text"  class="form-control" id="qq"   name="qq"/>
<br>
<br>
<br>
<label for ="rr">NEXT DUE ON :-
<input type="text"  class="form-control" id="rr"   name="rr"/>
<br>
<br>
<hr>



<label for="ss"> 
    
        <option value="By Manish M KOTHARI ">By Manish M KOTHARI</option>
        <option value=" By M KOTHARI">By M KOTHARI</option>
        <input type="date"   id="ss" name="ss" />
        </label> 
            <br>
            <br>
            <br>
            
            <button type='submit1' id="submit1" name="submit1 " >ADD</button>
            <button type='submit2' id="submit2" name="submit2 " ><a href="http://localhost/Harry/fpdf/2form13pdf.php">Print Preview</a></button>
</div>  
</body>
</html>