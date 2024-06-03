<?php
  $showAlert = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $Search = $_POST["Search"] ?? "";
    $Title = $_POST["Title"] ?? "";
    $NameofOwner = $_POST["NameofOwner"] ?? "";
    $FactoryName = $_POST["FactoryName"] ?? "";
    $Department = $_POST["Department"] ?? "";
    $Address = $_POST["Address"] ?? "";
    $City = $_POST["City"] ?? "";
    $Telno_1 = $_POST["Telno_1"] ?? "";
    $Telno_2 = $_POST["Telno_2"] ?? "";
    $exists = false;

    // Use prepared statements to prevent SQL injection attacks
    $stmt = $conn->prepare("INSERT INTO client (Search, Title, NameofOwner, FactoryName, Department, Address, City, Telno_1, Telno_2) 
                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $Search, $Title, $NameofOwner, $FactoryName, $Department, $Address, $City, $Telno_1, $Telno_2);
    $result = $stmt->execute();

    if ($result) {
      $showAlert = true;
    } else {
      echo "Error:" . $conn->error;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  border: 1px solid black;
  padding: 20px;
}
    
div {
  background-color: rgb(244, 241, 237);
  width: 1000px;
  border: 15px solid rgb(153, 81, 81);
  padding: 3px;
  margin: 0px;
}

.container .btn:hover {
  background-color: black;
  color: white;
} 

button {
  width: 100px;
  text-align: center;
}

button:hover {
  color: rgb(15, 57, 224);
}
</style>

<h2>Client Master</h2>

</head>
<body>
<form action="/Harry/client master.php" method="POST"> 
<div>
    <h3 style="border: rgb(103, 103, 102); border-width: 5px; border-style: Thick;"></h3>

            <label for="Search">&nbsp;&nbsp; Search&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;<select name="Search">
            <option value="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
            <option value="Akolaaaaaaaaaaaaaaaaaaaaaaaaaaa">Akolaaaaaaaaaaaaaaaaaaaaaaaaaaa</option>
            <option value="Amravatiiiiiiiiiiiiiiiiiiiiiiiii">Amravatiiiiiiiiiiiiiiiiiiiiiiiii</option>
            <option value="Aurangabaddddddddddddddddddddddd ">Aurangabaddddddddddddddddddddddd</option> 
        </select>
<hr>

         <label for="Title" class="form-label">Title</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Title"  name="Title" aria-describedby="emailHelp">
        

<hr>
       
         <label for="NameofOwner" class="form-label">Name Of Owner</label>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="NameofOwner" name="NameofOwner" aria-describedby="emailHelp">
        

<hr>
     
         <label for="FactoryName" class="form-label"> FactoryName</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="FactoryName" name="FactoryName"  aria-describedby="emailHelp">
        


<hr>
      
         <label for="Department" class="form-label">Department</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Department" name="Department"  aria-describedby="emailHelp">
        
<hr>
        
          
      
         <label for="Address" class="form-label">Address</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="Address" name="Address"  aria-describedby="emailHelp">
         

            <hr>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" />
<hr>
        <label for="City" class="form-label">City</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="form-control" id="City" name="City"  aria-describedby="emailHelp">
       
<hr>
      
        <label for="Telno_1" class="form-label">Telno_1</label>
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="form-control" id="Telno_1" name="Telno_1"  aria-describedby="emailHelp">
        
<hr>
          
       
        <label for="Telno_2" class="form-label">Telno_2</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <input type="text" class="form-control" id="Telno_2" name="Telno_2"  aria-describedby="emailHelp">
       

            
<hr>
            <br>
            <br>
            <button type="submit">ADD</button>
            <button type="submit">EDIT</button>
            <button type="submit" >DELETE</button>
            <button type="submit">EDIT</button>
            <button type="submit" >REFRESH</button>
          </form>            
</div>
</body>
</html>