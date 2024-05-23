<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SLIIT CITY UNI - Student Records</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <style>
    body {
  background-image: url('background2.jpg');
  background-repeat: inherit;
  background-size: 100%; 

}
 

    body{
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    img{
      height: 20vh;
    }

    .container
    {
      text-align: center;
      margin-top: 100px;
      background-size: 150%;
    }
    .txtbox
    {
      margin: 10px 20px;
    }
  </style>

</head>
<body>  
<div class="container">
  <img src="logo.png" alt="SLIIT CITY UNI">
  <h1 id="main-heading" class="mt-5">SLIIT CITY UNI</h1>
  <h2>Student Records</h2>

  <div class="center">
    <button onclick="getAllStudents()" class="btn btn-primary">Get All Students</button>
    <input type="text" id="sid" class="txtbox" placeholder="Enter Student ID">
    <button onclick="getStudent()" class="btn btn-primary">Get Student</button>
  </div>

  <div class="row">
    <div class="col">
      <div id="output"></div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  function getAllStudents() {
    $.ajax({
      url: 'students.php',
      type: 'get',
      success: function(data) {
        $('#output').html(data);
      }
    });
  }
  
  function getStudent() {
    var sid = $('#sid').val();
    $.ajax({
      url: 'students.php', 
      type: 'get',
      data: { 'sid': sid },
      success: function(data) {
        $('#output').html(data);
      }
    });
  }
</script>

</body>
</html>
