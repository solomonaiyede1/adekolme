<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adekolme Nigeria Ltd</title>
    <link href="asset/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="asset/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="icon" href="banner/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


    <script src="asset/js/script.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
      .navbar-nav .nav-link{
        color: black;
        font-weight: 600;
        font-family: sans;
        font-size: 15px;
      }

      #text{
        animation-duration: 2s;
        animation-iteration-count: infinite;
        font-family: sans;
        font-size: 20px;
        font-weight: 900;
        font-style: bold;
      }
      .nav-link{
        color: white;
      }
    </style>
</head>
<body class="bg-white">
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="padding: 2px 2px; height: 60px; box-shadow: 2px 2px 2px rgba(0,0,0, 0.2); position: sticky; top: 0px; z-index:10">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="banner/logo_a.png"style="width: 200px; height: auto"  alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="position: relative; z-index: 10; background-color: white;">
      <ul class="navbar-nav float-end">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About Us</a>
        </li>
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="/product">Products</a>
        </li>
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="/partner">Our Partners</a>
        </li>
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
           <a class="btn" style="background-color:#df5900; color: white; width: 100px; height: 30px; margin-top: 7px; padding:3px; padding-top: 6px; border-radius: 15px" aria-current="page" href="/admin/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>