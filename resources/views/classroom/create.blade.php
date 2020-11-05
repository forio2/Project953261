
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
        </div>
    {!! Form::close() !!}
    </div>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">