@extends('layouts.main')

@section('content')
<!-- Put the webpage content here -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-color: #441120;}
form {border: 3px solid #000000;
margin: auto;
width: 50%;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #6B1524;
  box-sizing: border-box;
}

button {
  background-color: #930022;
  color: #000000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;

}

img {
  width: 25%;
  
  
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>
<body>

<h2 style="color:rgb(255, 255, 255)" >Forgot Password</h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="Duothinggus_2.png" alt="Avatar" >
  </div>

  <div class="container">

    <label for="psw"><b style="color:rgb(255, 255, 255)">Enter New Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" style="color:rgb(255, 255, 255)">Send</button>
    <label style="color:rgb(255, 255, 255)">
    
      <button type="submit" style="color:rgb(255, 255, 255)">Don't have a account?</button>
      <label style="color:rgb(255, 255, 255)">
      
  </div>


  <div class="container" style="background-color:#6B1524">
    <button type="button" class="cancelbtn" style="color:rgb(255, 255, 255)">Cancel</button>
    
  </div>
</form>

<script type="text/javascript">(function(){window['__CF$cv$params']={r:'6d828d8b4dd60b80',m:'Ck3RjyWj8soXzygfKmkDBiJXcHbwhQSeTx7uH5eMKb0-1643963593-0-AWJzNnQDh2OV+w4WqSeNV4esB/wPME9BP4VvlhEa/KT7XZr28fUiL6oNGL6rpGdRYl3wI2R4PX5kg42QfsXUjAnA4wt6hvTolsgH68gNerP7OLeUvIEcn3qJmPeZoYeQ7iDmDzua2HkTffZBpeRJvIu25tzv5zrxNhuobRy4eNMeOdSHTI60nW3nGxuBuhYyQHRyU+596T8FLY73AIv05as=',s:[0x4b1636fc32,0x2dc5f1b924],}})();</script></body>
</html>

@endsection