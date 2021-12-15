@extends('layouts.main')

@section('content')
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

<h2 style="color:rgb(255, 255, 255)" >Register Form</h2>

<form action="{{ route('register') }}" method="post">
  @csrf
  <div class="imgcontainer">
    <img src="Duothinggus_2.png" alt="Avatar" >
  </div>

  <div class="container">

    <label for="name"><b style="color:rgb(255, 255, 255)">Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" value="{{ old('name') }}">
    @error('name')
      <p style="color: red">{{ $message }}</p>
    @enderror

    <label for="email"><b style="color:rgb(255, 255, 255)">Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}">
    @error('email')
      <p style="color: red">{{ $message }}</p>
    @enderror
    
    <label for="password"><b style="color:rgb(255, 255, 255)">Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">
    @error('password')
      <p style="color: red">{{ $message }}</p>
    @enderror

    <label for="password_confirmation"><b style="color:rgb(255, 255, 255)">Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_confirmation">

    
        
    <button type="submit" style="color:rgb(255, 255, 255)">Register</button>
    <label style="color:rgb(255, 255, 255)">
    
      <input type="checkbox" checked="checked">By creating an account you agree to our <a  href="#">Terms of service</a>.</p>
    </label>
  </div>


  <div class="container" style="background-color:#6B1524">
    <button type="button" class="cancelbtn" style="color:rgb(255, 255, 255)">Cancel</button>
    <span class="psw" style="color:rgb(255, 255, 255)">Already have an account? <a href="#" style="color:dodgerblue" >Sign in </a></span>
  </div>
</form>
@endsection