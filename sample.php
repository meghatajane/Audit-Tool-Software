<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  $CertificateNO = $_POST["CertificateNO"];
  $pvno = $_POST["pvno"];
  $Nameandaddress = $_POST["Nameandaddress"];
  $vesselgasholder= $_POST["vesselgasholder"];
  $addressmaker= $_POST["addressmaker"];
  $sql = "INSERT INTO sample (CertificateNO, pvno, Nameandaddress, vesselgasholder ,addressmaker) VALUES ('$CertificateNO', '$pvno','$Nameandaddress','$vesselgasholder','$addressmaker')";
    
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
    <h2> Form 11</h2>
    <h4>(See rules 65 and 73-A)</h4>
    <h2>Report of Examination of Pressure Plant/Vessel/Gasholder</H2>
    <div>
        <form action="/Harry/sample.php" method="post">
        <label for="CertificateNO ">CertificateNO </label>
       <input type="number" class="form-control" id="CertificateNO" name="CertificateNO"/>
    <br>
    <br>
      <label for="pvno">pvno </label>
        <input type="number" class="form-control" id="pvno" name="pvno"/>
       <br>
       <br>
       <hr>
       <br>
       <label for="Nameandaddress"> 1.Nameandaddress  :</label>
        <input type="text" class="form-control" id="Nameandaddress"  name="Nameandaddress"/> 
       <br>
       <label for="vesselgasholder">2.Vesselgasholder</label>
        <input type="text" class="form-control" id="vesselgasholder" name="vesselgasholder"/>
       <br>
       <br>
        <label for="addressmaker">3. addressmaker.</label>&nbsp;
        <input type="text" class="form-control" id="addressmaker" name="addressmaker"/> 
      <br>
      <br>
      <button type='submit'>ADD</button>
    </div>  
</body>
</html>