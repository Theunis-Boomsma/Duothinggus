@extends('layouts.main')

@section('content')
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

button {
  background-color: #930022;
  color: #000000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
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

button2 {
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
  width: 13%;
  
  
}

.container {
  padding: 16px;
}

.container2 {
  margin: auto;
  width: 50%;
  border: 3px solid rgb(255, 255, 255);
  padding: 10px;

}

.b {
    text-align: center;
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
<body>
   

 
    <h1 style="color:rgb(255, 255, 255)">Welcome</h1>

    <div class="container" style="background-color:#6B1524">
        <div class="imgcontainer">
            <img src="Duothinggus_2.png" alt="Avatar" >
          </div>

          <div class="container2" style="background-color:#930022">
            <h2 style="color:rgb(255, 255, 255)" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </h2>
          </div>
   
    
        <div class="container" style="background-color:#6B1524">
            <button type="button" class="cancelbtn" style="color:rgb(255, 255, 255)">Login</button>
            <button type="button2" class="cancelbtn" style="color:rgb(255, 255, 255)">Register</button>

          </div>


          

</body>
@endsection