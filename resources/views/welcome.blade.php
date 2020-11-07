<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="img-fluid">
        <div class="row logo-container-div justify-content-center">
            <div class="logo-wrapper col-auto">
                <div class="jumbotron jumbotron-fluid rounded shadow-lg p-3 mb-5 rounded" style="width: 700px;"> <!--jumbotron, rounded and shadow -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="welcome">WELCOME</h1>
                                <br>
                            </div>
                            <!--Login Button-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" onclick="window.location.href = '/login'" class="btn btn-dark btn-lg btn-block">Sign In</button>
                                </div>
                                <div class="form-group">
                                    <button type="submit" onclick="window.location.href = '/register'" class="btn btn-dark btn-lg btn-block">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
<style>
  .img-fluid {
    height: max-content;
    width: auto;
    background-image: linear-gradient(150deg, rgba(89, 2, 2, 0.6) 30%, rgba(191, 118, 54, 0.7)), url("assets/s.jpg");
    background-position: 0%, 0%, 50%, 50%;
    background-attachment: scroll, fixed;
    background-size: auto, cover;
  }
  .logo-wrapper {
    font-family: 'Raleway', sans-serif;
    padding: 250px 30px;
    text-align: center;
    position: relative;
  }
  .welcome {
      font-weight: bolder
  }
</style>
</html>
