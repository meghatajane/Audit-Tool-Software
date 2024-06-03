<?php
      $showAlert = false;
      if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            include 'partials/_dbconnect.php';
            $cert_no= $_POST["cert_no"];
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
          
            $sql = "INSERT INTO form11 (cert_no,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,aa,bb,cc,dd,ee) 
                    VALUES ('$cert_no','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$bb','$cc','$dd','$ee')";
                    $result = mysqli_query($conn,$sql);
                    if ($result){
                        $showAlert = true;
                      }
       }
?>
<!DOCTYPE html>
  <html>
    <head>
      <style>
        body{
            padding:0;
            margin:0;
            box-sizing:border-box;
          }
        .main {
          background-color: rgb(247, 241, 245);
          width: 100%;
          border: 15px solid rgb(129, 47, 91);
          padding: 25px;
          margin: 15px;
          }

        img {
            opacity: 0.5;
          }
        img:hover {
          opacity: 1.0;
          }
        .container{
          width: 70%;
          margin: 1% auto;
          }
          table{
            text-align:left;
          }
          table th{
            padding-bottom:12px;
          }
          table td{
            padding-bottom:10px;
          }
          .add,.print{
            padding:8px 10px;
            border:none;
            cursor:pointer;
          }
          .add{
            background-color:#6a994e;
            border:1px solid #a7c957;
          }
          .add:hover{
            background-color:#a7c957;
            border:1px solid #6a994e;
          }
          .print{
            background-color:#eae2b7;
            border:1px solid #fcbf49;
          }
          .print:hover{
            background-color: #fcbf49;
            border:1px solid #eae2b7;
          }
          h1{
            text-align:center;
          }
      </style>
    </head>
    <body>
      <div class="main  container">
        <div>  </div>
        <div class="">
          <div>
              <h1  style="margin: 0"> M.KOTHARI TECHNO ASSOCIATES</h1>
              <hr style="margin: 20px; "></div>
        </div>
          <form action="form11.php" method="post">
            <table>
                  <tr>
                    <th style="width:81%"> <label for="cert_no"> Certificate NO :</label></th>
                    <td><input type="text" class="form-control" id="cert_no"  name="cert_no"/></td>
                  </tr>

                  <tr>
                    <th><label for="b"> H.NO /LT NO :</label></th>
                    <td><input type="text" class="form-control" id="b"  name="b"/></td>
                  </tr>
                  <tr>
                
                    <th><label for="c">1. Name of the Occupier</label></th>
                    <td><input type="text" class="form-control" id="c" name="c"/></td>
                  </tr>
                  <tr>
               
                    <th> <label for="d">2. Name & Address of Factory</label> </th>
                    <td> <input type="text" class="form-control" id="d"  name="d"/> </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="font-weight:bold; width:40%"><label for="Type identification ">
                      3.(a) Type identification number and description of hoist,lift,lifting machine, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; chairs,ropes,and lifting takles.</label>
                        <table width="100%">
                          <tr>
                            <th> <label  style="margin-left:25px " for="e"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a1.Name Of Equipment:</label></th>
                            <td> <input type="text" class="form-control" id="e"  name="e"/></td>
                          </tr>

                          <tr>
                            <th style="width:100% "> <label  style="margin-left:25px " for="f">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a2. Make:</label></th>
                            <td> <input type="text" class="form-control" id="f"  name="f"/></td>
                          </tr>

                          <tr> 
                            <th> <label  style="margin-left:25px " for="g">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a3. SWL:</label></th>
                            <td> <input type="text" class="form-control" id="g"  name="g"/></td>
                          </tr>

                          <tr>
                            <th> <label  style="margin-left:25px " for="h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a4. Sr NO/ID NO:</label></th>
                            <td> <input type="number" class="form-control" id="h"  name="h"/></td>
                          </tr>

                          <tr>
                            <th> <label  style="margin-left:25px " for="i">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a5. Location:</label></th>
                            <td> <input type="text" class="form-control" id="i"  name="i"/></td>
                          </tr>

                          <tr>
                            <th>  <label for="j">&nbsp;&nbsp;&nbsp;&nbsp;(b) Date of Construction orreconstruction and the date
                                when the hoist, lift, lifting machine, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; chairs, ropes, and lifitinf tacklesr were first taken
                                into in use in the factory:</label></th>
                            <td> <input type="text"  class="form-control" id="j"  name="j"/></td>
                          </tr>
                        </table>
                    </td>
                  </tr>
                  
                  <tr>        
                    <th> <label for="k">4. Date of last examination made under section 28(1)(a)(ii) and 
                            29(1)(a)(iii) <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and by whom it was carried out.</label></th>
                    <td> <input type="date" style=" width:96%" class="form-control" id="k"  name="k"/> </td>
                  </tr>
                  <tr>
                    <th><label for="l">5. (A) Maintaince(List of parts ,if any,which were inaccesible)
                    Are the following parts of the hoist of <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; list properly maintained and in good working order?
                    If not ,state what defects have been found:</label>  </th>
                    <td> <input type="text"  class="form-control" id="l"  name="l"/></td>
                  </tr>
                  <tr>
                    <th> <label style="padding-left:45px;" for="m"> (a) Enclosure of hoistway or liftway:</label></th>
                    <td> <input type="text" class="form-control" id="m"  name="m"/></td>
                  </tr>
                  <tr>  
                 
                    <th> <label style="padding-left:45px;" for=" n"> (b) Landing gates and cage gate(s): </label></th>
                    <td> <input type="text" class="form-control" id="n"  name="n"/></td>
                  </tr>
                  <tr>
                  
                
                    <th> <label style="padding-left:45px;" for="o"> (c) Interlock in landing gates and cage gate(s):</label></th>
                    <td> <input type="text" class="form-control" id="o"  name="o"/></td>
                  </tr>
                  <tr>
                    <th> <label style="padding-left:45px;" for="p">(d) Others gates fastenings:</label></th>
                    <td> <input type="text" class="form-control" id="p"  name="p"/></td>
                  </tr>
                  <tr>
                  
                 
                    <th> <label style="padding-left:45px;" for="q">(e) Cage and paltform and fittings, cage guides, buffers,  interior of the hoistway or liftway:</th>
                    <td> <input type="text" class="form-control" id="q"  name="q"/></td>
                  </tr>
                  <tr>
                    <th> <label style="padding-left:45px;" for="r">(f) Overrunning Devices: </label></th>
                    <td> <input type="text" class="form-control" id="r"  name="r"/></td>
                  </tr>
                  <tr>
                    <th>  <label style="padding-left:45px;" for="s">(g) Suspension ropes or chains and their attchments </label> </th>
                    <td> <input type="text" class="form-control" id="s"  name="s"/> </td>
                  </tr>
                  <tr>
                    <th> <label style="padding-left:45px;" for="t">(h) Safety  gear,i.e arrangements for preventing fall of paltformor cagebrakes </label> </th>
                    <td> <input type="text" class="form-control" id="t"  name="t"/> </td>
                  </tr>
                  
                  <tr>
                    <th> <label style="padding-left:45px;" for="u">(i) Brakes </label></th>
                    <td><input type="text" class="form-control" id="u"  name="u"/></td>
                  </tr>
                  <tr>
                    <th><label style="padding-left:45px;" for="v ">(j) Work for spur gearing </label></th>
                    <td><input type="text" class="form-control" id="v"  name="v"/></td>
                  </tr>
                  <tr>
                    <th> <label style="padding-left:45px;" for="w" style="padding-left:35px;">(k) Others electrical Equipments </label> </th>
                    <td> <input type="text" class="form-control" id="w"  name="w"/> </td>
                  </tr>
                  <tr>
                    <th> <label style="padding-left:45px;" for="x">(l) Others Plans </label> </th>
                    <td> <input type="text" class="form-control" id="x"  name="x"/></td>
                  </tr>
                  <tr>
                    <th> <label style="padding-left:15px;" for="y">(B) Date and number of the certificate relating to any test and examination
                           made under sub-rule(1) <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; of the rule 64 together with the name of the person who issued the certificate. </label></th>
                    <td> <input type="text" class="form-control" id="y"  name="y"/> </td>
                  </tr>
                  <tr>
                    <th>  <label  style="padding-left:15px;"  for="z"> (C) (i) Date of annealing or the heat treatment of thr chain and lifting tackle carried
                          out under <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; sub-rule (5) of rule 64 and by whom it was carried out. </label> </th>
                    <td>  <input type="text" class="form-control" id="z"  name="z"/></td>
                  </tr>
                  <tr>
                    <th> <label for="aa"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ii) Particular of any defects
                       found at any such examination or after annealingand affecting the safe <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                       working load and of the steps taken to remedy such defects </label> </th>
                    <td>  <input type="text" class="form-control" id="aa"  name="aa"/>  </td>
                  </tr>
                  <tr>
                    <th> <label for="bb">6.Repairs ,renewals or alterations (if any) required and the period within which they should be executed and maximum safe 
                working load subject to repairs,renewals or alterations(if any) </label> </th>
                    <td> <input type="text" class="form-control" id="bb"  name="bb"/> </td>
                  </tr>
                  <tr>
                    <th> <label for="cc">I/We certify that on thoroughly examined the hoist ,lift,lifting machine
                ,ropes,and lifting tackles and details of examination/test carried out is enclosed here with
                that the above is a correct report of the result.</label> </th>
                    <td> <input type="date" class="form-control" id="cc"  name="cc"/> </td>
                  </tr>
                  <tr>
                    <th> <label for ="dd">NEXT DUE ON :- </label> </th>
                    <td> <input type="date" class="form-control" id="dd"  name="dd"/> </td>
                  </tr>
                  <tr>
                    <th> <label for="ee"> </label> </th>
                    <td> <input type="text" class="form-control" id="ee"  name="ee"/> </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align:center;padding-top:25px;"> 
                        <button class="add" type='submit1' id="submit1">ADD</button>
                        <button class="print" type='submit2' id='submit' name='submit' >Print Review</button></td>
            <table>
          </form>   
      </div>  
    </body>
</html>

