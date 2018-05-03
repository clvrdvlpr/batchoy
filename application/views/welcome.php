<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
    <title>Welcome</title>
    <style>
    .form-control {
        width: 1100px;
        float:left;
        margin-right: 10px;
    }

    .media {
      width: 1257px;
      margin-top: 10px;
      border-radius: 3px;
    }

    .col-md {
      text-align: center;
      padding-top: 50px;
    }

    #content1 {
      padding-top:20px;
    }

    #content2 {
      padding-top:20px;
    }

    #content3 {
      padding-top:20px;
    }

    .btn-md {
      background-color: gray;
      border-color: transparent;
      margin: 5px;
    }

    #myInput {
      width:800px;
      margin: 5px;
    }



    </style>
  </head>
  <body>
    <div class="container-fluid">
      <h1>Research Intelligent Application</h1>
      <div class="row">
        <div class="col-md-8">
          <input class="form-control" id="myInput" type="text" placeholder="Search" />
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-primary btn-md">Go</button>
          <button type="button" class="btn btn-primary btn-md" data-toggle="collapse" data-target="#advlist">Advanced</button>
        </div>
      </div>
        <div class="collapse" id="advlist">
        <div class="media border p-3">
          <form>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Option 1
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Option 2
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Option 3
              </label>
            </div>
          </form>
        </div>
        </div>
        <div class="row">
          <div class="col-md">
            <h1>Bulletin</h1>
              <div id="content1" class="mx-auto col-sm-10 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
          </div>
          <div class="col-md">
            <h1>New Projects of 2018</h1>
              <div id="content2" class="mx-auto col-sm-10 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
          </div>
          <div class="col-md">
            <h1>Useful Facts</h1>
              <div id="content3" class="mx-auto col-sm-10 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
          </div>
        </div> 
    </div>    
  </body>
</html>
