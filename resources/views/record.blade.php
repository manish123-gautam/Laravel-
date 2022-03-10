<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Waterfall&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
      label
      {
        font-family: 'Dancing Script', cursive;
        font-size:25px;
      }
      .form
      {
        width:50%;
        padding:10px;
      }
      h1
      {
        font-family: 'Dancing Script', cursive;
      }
    </style>

</head>
<body>
    
    <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>    
    </section>

    <section>


<!-- Modal -->
<div class="modal fade" id="studenteditrecord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            First Name:
            <input type="text" name="name" id="fname" class="form-control"/>
          </div>
          <div class="col-sm-4">
            Last Name:
            <input type="text" name="name" id="lname" class="form-control"/>
          </div>
          <div class="col-sm-4">
            Email:
            <input type="text" name="name" id="email" class="form-control"/>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-4">
            Gender:
            <input type="text" name="gender" id="gender" class="form-control"/>
          </div>
          <div class="col-sm-4">
            DOB:
            <input type="text" name="dob" id="dob" class="form-control"/>
          </div>
          <div class="col-sm-4">
            Userame:
            <input type="text" name="username" id="username" class="form-control"/>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-4">
            Age:
            <input type="text" name="age" id="age" class="form-control"/>
          </div>
          <div class="col-sm-4">
            City:
            <input type="text" name="city" id="city" class="form-control"/>
          </div>
          <div class="col-sm-4">
            Sate:
            <input type="text" name="state" id="state" class="form-control"/>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-6">
            Fee:
            <input type="text" name="fee" id="fee" class="form-control"/>
          </div>
          <div class="col-sm-6">
            Branch:
            <input type="text" name="branch" id="branch" class="form-control"/>
          </div>
        </div>
        <div class="row mb-4 mt-3">
          <div class="col-sm-12">
            Address:
            <input type="text" name="address" id="address" class="form-control"/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary editbtn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Date</button>
      </div>
    </div>
  </div>
</div>

    </section>
      
  <section class="">
  <h1 class="text-center mt-5">Student Record</h1>
      <hr class="w-50 m-auto"/>
      <table class="table table-striped mt-5">
      <thead>
          <tr>
              <th>id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>DOB</th>
              <th>Username</th>
              <th>Gender</th>
              <th>Age</th>
              <th>State</th>
              <th>City</th>
              <th>Fee</th>
              <th>Branch</th>
              <th>Address</th>
              <th>Action</thd>
          </tr>
    </thead>
          <!-- mnaidh  -->
    <tbody>
    <?php
          $num=0; 
          for($i=0;$i<sizeof($data);$i++)
          {
          ?>
          <tr>
            <td id="studentid">{{$data[$i]->id}}</td>
            <td id="fname_l">{{$data[$i]->fname}}</td>
            <td id="lname_l">{{$data[$i]->lname}}</td>
            <td id="email_l">{{$data[$i]->email}}</td>
            <td id="dob_l">{{$data[$i]->dob}}</td>
            <td id="username_l">{{$data[$i]->username}}</td>
            <td id="gender_l">{{$data[$i]->gender}}</td>
            <td id="age_l">{{$data[$i]->age}}</td>
            <td id="state_l">{{$data[$i]->state}}</td>
            <td id="city_l">{{$data[$i]->city}}</td>
            <td id="fee_l">{{$data[$i]->fee}}</td>
            <td id="branch_l">{{$data[$i]->branch}}</td>
            <td id="address_l">{{$data[$i]->address}}</td>
            <td>
                <!-- <a href={{"update/".$data[$i]->id}}> <button class="btn btn-primary" 
                data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button></a> -->
                <button class="btn btn-primary editbtn" id="editbtn{{$num}}" data-bs-toggle="modal" data-bs-target="#studenteditrecord">Update</button>
                <a href={{"delete/".$data[$i]->id}}><button class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
    <?php
          $num++;
          }
    ?>
    </tbody>
    
      </table>
  </section>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>


<script>
  $(document).ready(function () {
    $("#editbtn").click(function(){
    // alert($("#fname_l").text());
      var fname = $("#fname_l").text();
      $("#fname").val(fname);
      var lname = $("#lname_l").text();
      $("#lname").val(lname);
      var email = $("#email_l").text();
      $("#email").val(email);
      var dob = $("#dob_l").text();
      $("#dob").val(dob);
      var gender = $("#gender_l").text();
      $("#gender").val(gender);
      var username = $("#username_l").text();
      $("#username").val(username);
      var age = $("#age_l").text();
      $("#age").val(age);
      var city = $("#city_l").text();
      $("#city").val(city);
      var state = $("#state_l").text();
      $("#state").val(state);
      var fee = $("#fee_l").text();
      $("#fee").val(fee);
      var branch = $("#branch_l").text();
      $("#branch").val(branch);
      var address = $("#address_l").text();
      $("#address").val(address);


    });


  });
</script>


</body>
</html>