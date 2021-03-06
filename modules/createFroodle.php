<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Froodle LLU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!--include the bootstrap non-install library-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container bg-primary text-light rounded">
      <h3 class = "m-3 p-3 text-center">Froodle</h3>
	  <h6 class = "m-3 p-3 text-center">Created by the amazing folks at LLU</h6> <!-- add link to the LLU website-->
      <div class="row p-3">
        <div class="form-group col">
          <label for="#title">Choose a name...</label>
          <input class = "form-control" type="text" name="" id = "title" value="">
        </div>
      </div>
      <div class="row p-3">
        <div class="form-group date col-lg">
            <label for="#date">Choose a date...</label>
            <input type="text" class="datepicker form-control" id = "date" placeholder="click to display calendar">
        </div>
        <div class="form-group col-lg">
          <label for="#date">Select an hour...</label>
          <input class = "form-control" type="time" name="" id = "time" value="">
        </div>
        <div class="form-group col-lg">
          <br>
          <button id = "add_date" type="button" class="btn btn-light btn-block">Add date</button>
        </div>
      </div>
      <h4 class = "m-3 text-center"> Mira tus fechas:</h4>
      <div id="fechas">

      </div>
      <button id = "add_froodle" type="button" class="btn btn-success btn-block">Add froodle</button>
      <br>
    </div>
  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.datepicker').datepicker({
      format: 'mm-dd-yyyy',
      autoclose: true,
      linked:true
    });
  </script>
  <script src = "modules/createFroodle.js"></script>
</html>
