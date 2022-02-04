@extends('layouts.main')

@section('content')
<!-- Put the webpage content here -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<style>
    .bg-black{
        background-color: black;
    }
    body{
        background-color: #441120;
    }
    .bg-red{
        background-color: #6B1524;
    }
    .border-3 {
        border-width:3px !important;
        border-color: black !important;
    }
    .nopadding {
        padding: 0 !important;
        margin: 0 !important;
    }
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    button:hover {
        opacity: 0.8;
    }
</style>
<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script><script async src='/cdn-cgi/bm/cv/669835187/api.js'></script><script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
<script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
    <div class="container mt-5">
        <div class="row my-auto d-flex justify-content-center">
            
            <div class="col-6 nopadding border border-3 ">
                <div class="my-auto text text-center p-5">
                    <img src="https://thumbs.dreamstime.com/z/example-stamp-grunge-vintage-isolated-white-background-sign-153942456.jpg" class="img-fluid border border-3 max-width: 100%; height: auto; ">

                </div>
                <ul class="list-group text-center  rounded-0 p-3" style="list-style: none;">
                    <li><button type="button" class="btn btn-light btn-lg btn-block border border-dark rounded-0">awn1</button></li>
                    <li><button type="button" class="btn btn-light btn-lg btn-block border border-dark rounded-0">awn2</button></li>
                    <li><button type="button" class="btn btn-light btn-lg btn-block border border-dark rounded-0">awn3</button></li>
                    <li><button type="button" class="btn btn-light btn-lg btn-block border border-dark rounded-0">awn4</button></li> 
                </ul>
                <div class="row mt-2 mx-auto bg-red p-1 border-top border-dark">
<div class="col-fluid">
    <button type="button" class="cancelbtn btn btn-dark btn-lg rounded-0 " href="#">Back</button>
</div>
                </div>
            </div>
            
        </div>

    </div>
@endsection