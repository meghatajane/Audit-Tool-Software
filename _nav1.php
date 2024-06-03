<!DOCTYPE html>
<head>


<style>
  body{
       background-image:url("sunsetimg.png");
       background-repeat: no-repeat;
       background-size: cover;
      
  }

*{
    padding: 0px;
    margin: 0px;
    font-family: monospace;
}
ul{
    list-style-type:none;
    background: rgb(83, 3, 3)
}
ul li {
    display:inline-block ;
    position: relative;
}
ul li a {


    padding: 15px 20px;
    display: block;
    color: #FFF;
    text-decoration: none;
    text-align: center;
    font-size:25px;


}ul li ul.dropdown li {
    display:block;

}
ul li ul.dropdown{
    width:200%;
    background:rgb(153, 81, 81);
    position: absolute;
    margin-right: 5px;
    z-index: 999;
    display: none;

}
ul li a:hover{
    background:rgb(19, 0, 0);

}
ul li:hover ul.dropdown{
    display: block;
}

</style>
</head>

<body> 
<nav>
  <ul>
     <li>
    <a href="#">Master</a>
<ul class="dropdown">
  <li><a href="http://localhost/Harry/city.php"> City</a></li>
 <li><a href="http://localhost/Harry/client%20master.php"> Client Information</a></li>
  <li><a href="http://localhost/Harry/Authority.php"> Authority Master</a></li>
  
</ul>
</li>
<a>&nbsp;</a>
<li><a href="#">Maharashtra</a>
<ul class="dropdown">
   
<p><a href = "http://localhost/Harry/form11%20New.php">Form 11</a></p>

<li><a href=" http://localhost/Harry/form13.php">Form_13</a></li>
    
    </li>
    <a> &nbsp;</a>
  </ul> 
<li><a href="#">Register</a></li>
<a>&nbsp;</a>
<li><a href="#">Remainder</a></li>
<a>&nbsp;</a>
<li><a href="http://localhost/Harry/login.php">Logout</a></li>



</nav>   

    
    







</body>