@extends('layouts.main')

@section('content')
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
</head>
<body>

<h2 style="color:rgb(255, 255, 255)" >Login Form</h2>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="Duothinggus_2.png" alt="Avatar" >
  </div>

  <div class="container">
    <label for="uname"><b style="color:rgb(255, 255, 255)">Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b style="color:rgb(255, 255, 255)">Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" style="color:rgb(255, 255, 255)">Login</button>
    <label style="color:rgb(255, 255, 255)">
    
      <button type="submit" style="color:rgb(255, 255, 255)">Don't have a account?</button>
      <label style="color:rgb(255, 255, 255)">
      
      <input type="checkbox" checked="checked" name="remember" > Remember me
    </label>
  </div>


  <div class="container" style="background-color:#6B1524">
    <button type="button" class="cancelbtn" style="color:rgb(255, 255, 255)">Cancel</button>
    <span class="psw" style="color:rgb(255, 255, 255)"><a href="#" style="color:rgb(255, 255, 255)" >Forgot password? </a></span>
  </div>
</form>

</body>
@endsection