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
    .navbar {
        background-color:gray;
        color:white;
    }

    .nav-link {
        font-size: 20px;
        color: white;
        text-decoration:none;
        padding: 0px;
    }

    .nav-link:hover {
        color:white;
    }

    .btn {
        background-color: red;
        border: 1px solid transparent;
        color: white;
    }

    .btn:hover {
        opacity:0.5;
    }

    </style>
    </head>
    <body>
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Research Intelligent Application</a>
                </li>
            </ul>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn" type="submit">Go</i></button>
            </form>
        </nav>
    </body>
</html>
