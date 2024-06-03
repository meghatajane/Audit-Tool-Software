<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/_dbconnect.php';
  $city = $_POST["city"];
  $state = $_POST["state"];
  $sql = "INSERT INTO city (city, state) VALUES ('$city', '$state')";
    
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
        width: 100%;
        border: 250px;
        padding: 20px;
     }
    
    h1{
        text-align: center;
    }
    div{
        background-color: rgb(244, 241, 237);
        width: 50%;
        border: 15px solid rgb(153, 81, 81);
        padding: 3px;
        margin: 0px auto;
    }
    .container .btn:hover {
     background-color: black;
     color:  rgb(4, 4, 96);;}
     img {
 
     width: 100px;
     }

     img:hover {
     color:  rgb(103, 103, 102);;
     }
     </style>
     </head>
     <body>


    <h1>City</h1>
    <div>
          <form action="/Harry/city.php" method="post">
          <h3 style ="border: rgb(103, 103, 102); border-width:5px; border-style:Thick;"></h3>

          <label for="" >&nbsp;&nbsp;Select City:</label>

          <select name="city">
            
            <option value=""> </option>
            <option value="Ahmadnagar">&nbsp;Ahmadnagar</option>
            <option value="Akola">Akola</option>
            <option value="Amravati">Amravati</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Bhandara">Bhandara</option>
            <option value="Bhusawal">Bhusawal</option>
            <option value=">Bid">Bid </option>
            <option value=">Buldhana">Buldhana</option>
            <option value="Chandrapur">Chandrapur</option>
            <option value="Daulatabad">Daulatabad</option>
             <option value="Dhule ">Dhule </option>
            <option value="Jalgoan">Jalgoan</option>
            <option value="Kalyan">Kalyan </option>
            <option value="Karli">Karli</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Mahabaleshwar">Mahabaleshwar</option>
            <option value="Matheran">Matheran</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Nanded">Nanded</option>
            <option value="Nashik">Nashik</option>
            <option value="Osmanabad">Osmanabad</option>
            <option value=">Pandharpur">Pandharpur</option>
            <option value="Parbhani">Parbhani</option>
            <option value="Pune">Pune </option>
            <option value="Ratnagiri">Ratnagiri</option>
            <option value="Sangli">Sangli</option>
            <option value="Satara">Satara</option>
            <option value="Solapur">Solapur </option>
            <option value="thane">thane</option>
            <option value="Ulhasnagar">Ulhasnagar</option>
            <option value="Vasai-Virar">Vasai-Virar</option>
            <option value="Wardha">Wardha</option>
            <option value=">Yavtmal">Yavtmal</option>
        </select>
       <hr>  

       <label for=" ">  &nbsp;&nbsp;Select State:</label>
        <select name="state">
          
          <option value=""> </option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chattisgarh">Chattisgarh</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Delhi">Delhi</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himalchal Pradesh">Himalchal Pradesh</option>
          <option value="Jammu-Kashimir">Jammu-Kashimir</option>
          <option value="KarnatakaJharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value=">Kerala">Kerala</option>
          <option value="Ladakh">Ladakh</option>
          <option value="Lucknow">Lucknow</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalya">Meghalya</option>
          <option value=" Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland </option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana </option>
          <option value="Tripura">Tripura</option>
          <option value="Uttharakhand">Uttharakhand</option>
          <option value="Uttar Pradesh<">Uttar Pradesh</option>
          <option value=">West Bengal">West Bengal </option>
      </select>
        <hr>
        <br>
        <br>

        <button type="submit">ADD</button>
        <button type="submit">EDIT</button>
        <button type="submit">DELETE</button>
        <button type="submit">CLOSE</button>
        <button type="submit">REFRESH</button>
    
        <br>
        <br>
    </form>
  </div>  
  </body>
  </html>