@extends('layouts.app')

@section('content')
<div class="img-fluid"  style="background-image: linear-gradient(150deg, rgba(2, 30, 89, 0.6) 30%, rgba(93, 191, 54, 0.7)), url('https://s7d2.scene7.com/is/image/TWCNews/classroom_12_jpg1280x720jpg?wid=1250&hei=703&$wide-bg$') ;
                               background-position: center;
                               background-repeat: no-repeat;
                               background-size: cover;
                               padding: 0px 0px">
    <div class="row logo-container-div justify-content-center">
      <div class="logo-wrapper col-auto">
        <div class="jumbotron jumbotron-fluid">
          <div class="container"  style="padding: 0px 200px; height:100px">
            <h1>Classroom List</h1>
            <p>
                Please choose a room below which status are available<br>
                A = Available,
                U = Unavailable
            </p>
          </div>
        </div>
      </div>
    </div>
</div>
<br><br>
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
    <div class="container">
      <div class="row">
    @foreach($data as $classroom)
        <div class="col">
            {!! Form::open(['action' => ['ControllerClassroom@update', $classroom->noClassroom], 'id' => $classroom->noClassroom , 'method' => 'PUT']) !!}
                <div class="row" onclick="document.getElementById('<?php echo  $classroom->noClassroom?>').submit();" style="cursor:pointer"> <!-- onclick from form's id -->
                 <div id="bg">
                    <div class="row logo-container-div align-items-center justify-content-center">
                     <div class="logo-wrapper col-auto">
                        <h1 style="color: white; font-weight: bolder" class="nameMenu">{{$classroom->nameClassroom}}</h1>
                        <label style="color: white; font-size: 20px">Status: </label>
                        <label style="color: white; font-size: 20px" id="price">
                            @if($classroom->statusClassroom == 'A')
                                <?php echo 'Available'?>
                            @else
                                <?php echo 'Unavailable'?>
                            @endif
                        </label>
                        <input type="hidden" name="noClassroom" value="{{$classroom->noClassroom}}">
                        <input type="hidden" name="nameClassroom" value="{{$classroom->nameClassroom}}">
                        <input type="hidden" name="statusClassroom" value="U">
                        <input type="hidden" name="name" value="{{Auth::user()->name}}">
                        <input type="hidden" name="lastname" value="{{Auth::user()->lastname}}">
                     </div>
                    </div>
                 </div>
                </div>
            {!! Form::close() !!}
        </div>
    @endforeach
      </div>
    </div>
@endsection
<style>
      .img-fluid{
        height: max-content;
        width: auto;
        background-image: linear-gradient(150deg,rgba(2, 30, 89, 0.6), rgba(93, 191, 54, 0.7));
        background-position: 0%, 0%, 50%, 50%;
        background-attachment: scroll, fixed;
        background-size: auto, cover;
      }
      .logo-wrapper {
        font-family: 'Raleway', sans-serif;
        padding: 150px 30px;
        text-align:center;
        position: relative;
      }
      .nameMenu {
        padding: 20px 80px;
        color: black;
      }
      #price{
        color: #313940;
      }
      #contact{
        color: whitesmoke;
      }
      #bg{
        height: 430px;
        width: 300px;
        background-image: linear-gradient(150deg, rgba(2, 30, 89, 0.6), rgba(2, 30, 89, 0.6));
        background-position: 50%, 50%;
        background-size: contain, cover;
      }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
