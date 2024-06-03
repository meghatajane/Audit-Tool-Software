<?php
  $showAlert = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $Search = $_POST["Search"] ?? "";
    $Title = $_POST["Title"] ?? "";
    $Authority_name = $_POST["Authority_name"] ?? "";
    $Degree_1 = $_POST["Degree_1"] ?? "";
    $Degree_2 = $_POST["Degree_2"] ?? "";
    $Degree_3 = $_POST["Degree_3"] ?? "";
    $Degree_4 = $_POST["Degree_4"] ?? "";
    $CPC_no = $_POST["CPC_no"] ?? "";
    $SLA_Gov_LNo = $_POST["SLA_Gov_LNo"] ?? "";
    $Address = $_POST["Address"] ?? "";
    $Tel_off1 = $_POST["Tel_off1"] ?? "";
    $Resi_1 = $_POST["Resi_1"] ?? "";
    $Mobile = $_POST["Mobile"] ?? "";
    $Email_1 = $_POST["Email_1"] ?? "";
    $Email_2 = $_POST["Email_2"] ?? "";
    $exists = false;

    // Use prepared statements to prevent SQL injection attacks
    $stmt = $conn->prepare("INSERT INTO authority(Search, Title, Authority_name, Degree_1, Degree_2, Degree_3, Degree_4, CPC_no, SLA_Gov_LNo, Address, Tel_off1, Resi_1, Mobile, Email_1, Email_2) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssiiiss", $Search, $Title, $Authority_name, $Degree_1, $Degree_2, $Degree_3, $Degree_4, $CPC_no, $SLA_Gov_LNo, $Address, $Tel_off1, $Resi_1, $Mobile, $Email_1, $Email_2);
    $result = $stmt->execute();

    if ($result) {
      $showAlert = true;
    } else {
      echo "Error:" . $conn->error ;
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<h2>
Authority Master
</h2>
</head>
<body>
    <title>
    </title>
    </head>
    <style>
    body{
        width: 200px;
        border: 250px;
        padding: 20px;
     }
    div{
        background-color: rgb(240, 227, 235);
        width: 1000px;
        border: 15px solid rgb(111, 38, 83);
        padding: 3px;
        margin: 0px;
    }
    .container .btn:hover {
  background-color: black;
  color: white;}
  img {
  opacity: 0.5;
  width: 10px;
}

img:hover {
  opacity: 1.0;
}
  </style>
    <body>
    
    </body>
    <div>
    <form action="/Harry/Authority.php" method="POST"> 
            <label for="Search" class="form-label">Search</label><input type="text" class="form-control" id="Search" name="Search" aria-describedby="emailHelp">

          <select>
            <option value="AAAAAAAAAAAAAAAAAAAAAAAAA">AAAAAAAAAAAAAAAAAAAAAAAAA</option>
            <option value="BBBBBBBBBBBBBBBBBBBBBBBBB">BBBBBBBBBBBBBBBBBBBBBBBBB</option>
            <option value="CCCCCCCCCCCCCCCCCCCCCCCCC">CCCCCCCCCCCCCCCCCCCCCCCCC</option>
            <option value="DDDDDDDDDDDDDDDDDDDDDDDDD">DDDDDDDDDDDDDDDDDDDDDDDDD</option>
          </select>
          <br>
          <hr>
          <br>
          <label for="Title" class="form-label">Title</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Title" name="Title" aria-describedby="emailHelp">

     <br>
     <br>

          <label for="Authority_name" class="form-label">Authority_name</label>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Authority_name" name="Authority_name" aria-describedby="emailHelp">
    <br>
    <br>
          <label for="Degree_1 " class="form-label">Degree_1</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="Degree_1" name="Degree_1" aria-describedby="emailHelp">
   <br>
   <br>

          <label for="Degree_2 "class="form-label">Degree_2</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="Degree_2" name="Degree_2" aria-describedby="emailHelp">
   <br>
   <br>

         <label for="Degree_3 "class="form-label">Degree_3</label>
         &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Degree_3" name="Degree_3" aria-describedby="emailHelp">
   <br>
   <br>

         <label for="Degree_4"class="form-label">Degree_4</label>
         &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Degree_4" name="Degree_4" aria-describedby="emailHelp">
   <br>
   <br>

         <label for="CPC_no"class="form-label">CPC_no</label>
         &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="CPC_no" name="CPC_no" aria-describedby="emailHelp">
   <br>
   <br>

        <label for="SLA_Gov_LNo"class="form-label">SLA_Gov_LNo</label>
        &nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="SLA_Gov_LNo" name="SLA_Gov_LNo" aria-describedby="emailHelp">
   <br>
   <br>

        <label for="Address"class="form-label">Address</label>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Address" name="Address" aria-describedby="emailHelp">
   <br>
   <br>

       <label for="Tel_off1"class="form-label">Tel_off1</label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="Tel_off1" name="Tel_off1" aria-describedby="emailHelp">
   <br>
   <br>

       <label for="Resi_1"class="form-label">Resi_1</label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="Resi_1" name="Resi_1" aria-describedby="emailHelp">
   <br>
   <br>

      <label for="Mobile"class="form-label">Mobile</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="Mobile" name="Mobile" aria-describedby="emailHelp">
   <br>
   <br>

      <label for="Email_1"class="form-label">Email_1</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="Email_1" name="Email_1" aria-describedby="emailHelp">
   <br>
   <br>

      <label for="Email_2"class="form-label">Email_2</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<input type="text" class="form-control" id="Email_2" name="Email_2" aria-describedby="emailHelp">
   <br>
   <br>

   <hr>
<br>
        <button type="submit">ADD</button>
        <button type="submit">EDIT</button>
        <button  type="submit">DELETE</button>
        <button  type="submit">CLOSE</button>
        <button  type="submit">REFRESH</button>
</select>
  <br>
  <br>
  </body>
</body>
</html>