@extends('layouts.app')

@section('content')
<div class="img-fluid">
    <div class="row logo-container-div justify-content-center">
      <div class="logo-wrapper col-auto">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1>STEAK Justice</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur 
              adipiscing elit,<br> sed do eiusmod tempor 
              incididunt ut labore et dolore magna<br> aliqua.
              Ut enim ad minim veniam, quis nostrud
              exercitation<br> ullamco laboris nisi ut aliquip 
              ex ea commodo consequat. 
            </p>
          </div>
        </div>
      </div>
    </div>  
</div>
<br><br>
<div class="container">
    {!! Form::open(['action' => 'ControllerClassroom@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Classroom Name" name="nameClassroom">
        </div>
        <input type="hidden" name="statusClassroom" value="A">
        <div class="form-group">
            <button type="submit" class="btn btn-dark">Create</button>
            <button type="button" onclick="window.location.href = '{{ url('classroom') }}'" class="btn btn-secondary">Classroom</button>
        </div>
    {!! Form::close() !!}
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col">
    @foreach($data2 as $classroom)
     {!! Form::open(['action' => ['ControllerClassroom@destroy', $classroom->noClassroom], 'id' => $classroom->noClassroom , 'method' => 'DELETE']) !!}
     <?php
      $data3;
      $data3++;
     ?>
      <table class="table">
      @if($data3 == 2)
        <thead class="thead-dark">
        <tr>
          <th scope="col">
          <p class="text-center">Classroom name</p>
          </th>
          <th scope="col">
            <p class="text-center">Delete</p>
          </th>
        </tr>
        @endif
        </thead>
        <tbody>
          <tr>
            <td>
            {{$classroom->nameClassroom}}
            </td>
            <td>
            <div class="d-flex">
              <button type="button" class="btn btn-danger p-2 ml-auto" style="width: 200px" onclick="document.getElementById('<?php echo  $classroom->noClassroom ?>').submit();">delete</button>
              <input type="hidden" name="noClassroom" value="{{$classroom->noClassroom}}">
              <input type="hidden" name="nameClassroom" value="{{$classroom->nameClassroom}}">
              <input type="hidden" name="statusClassroom" value="U">
            </div>
            </td> 
          </tr>
        </tbody>
      </table>
      {!! Form::close() !!}
      @endforeach
    </div>
  </div>
</div>

<h1 style="text-align:center;">History</h1>
<br><br>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">
        Classroom name
      </th>
      <th scope="col" >
        Name
      </th>
      <th scope="col">
        Lastname
      </th>
    </tr>
  </thead>
@foreach($data as $x)
  <tbody>
    <tr>
      <td>
        {{$x->nameClassroom}}
      </td>
      <td>
        {{$x->name}}
      </td>
      <td>
        {{$x->lastname}}
      </td>
    </tr>
  </tbody>
@endforeach
</table>
</div>
@endsection
<style>
      .img-fluid{
        height: max-content;
        width: auto;
        background-image: linear-gradient(150deg, rgba(89, 2, 2, 0.6) 30%, rgba(191, 118, 54, 0.7)), url("assets/s.jpg");
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
</style>