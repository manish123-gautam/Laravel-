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
          <a class="nav-link" href="/record">Show Record</a>
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
    <section>
      
  <section>
  <h1 class="text-center mt-5">Student Registration</h1>
      <hr class="w-50 m-auto"/>
    <div class="container form box bg-light border border-primary mt-5 p-5" style="box-shadow:0px 0px 10px black;">
      <form action="user" method="post">
        @csrf
        <div class="row">
          <div class="col-sm-4" >
            <label>First <span class="text-primary">Name</span>:</label>
            <input type="text" name="fname" placeholder="Enter First Name" class="form-control"/>
          </div>
          <div class="col-sm-4">
            <label>Last <span class="text-primary">Name</span>:</label>
            <input type="text" name="lname" placeholder="Enter Last Name" class="form-control"/>  
          </div>
          <div class="col-sm-4">
            <label><span class="text-primary">E</span>mail:</label>
            <input type="email" name="email" placeholder="Enter Student Email" class="form-control"/>    
          </div>    
        </div>
        <div class="row mt-3">
          <div class="col-sm-12">
            <label>Date<span class="text-primary"> of Birth</span>:</label>
            <input type="date" name="dob" placeholder="Enter DOB" class="form-control"/>    
          </div>  
        </div>
        <div class="row mt-3">
          <div class="col-sm-6">
          <label>User<span class="text-primary">name</span>:</label>
            <input type="text" name="username" placeholder="Enter Useranme" class="form-control"/>    
          </div>
          <div class="col-sm-6">
            <label>Pass<span class="text-primary">word</span>:</label>
            <input type="password" name="password" placeholder="Enter Password" class="form-control"/>    
          </div>  
        </div>
        <div class="row mt-3">
          <div class="col-sm-6">
            <label>Select <span class="text-primary">Gender</span>:</label><br/>
            <input type="radio" name="gender" value="male"/>Male
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="male"/>Female
          </div>
          <div class="col-sm-6">
            <label>Student <span class="text-primary">Age</span>:</label>
            <input type="text" name="age" placeholder="Enter Student Age" class="form-control"/>    
          </div>  
        </div>
        <div class="row mt-3">
          <div class="col-sm-6">
            <label><span class="text-primary">S</span>tate:</label>
            <select name="state" class="form-control">
            <option>---Select---</option>
              <option>Uttar Pardesh</option>
              <option>Madhay Pardesh</option>
              <option>Bihar</option>
            </select>   
          </div>  
          <div class="col-sm-6">
          <label><span class="text-primary">C</span>ity:</label>
            <select name="city" class="form-control">
              <option>---Select---</option>
              <option>Lucknow</option>
              <option>Kanpur</option>
              <option>Unnao</option>
            </select>   
          </div>  
        </div>
        <div class="row mt-3">
          <div class="col-sm-6">
          <label>F<span class="text-primary">ee</span>:</label>
            <input type="text" name="fee" placeholder="Enter Student Fee" class="form-control"/>    
          </div>
          <div class="col-sm-6">
            <label>Bra<span class="text-primary">nch</span>:</label>
            <input type="text" name="branch" placeholder="Enter Student Branch" class="form-control"/>    
          </div>  
        </div>
        <div class="row mt-3">
          <div class="col-sm-12">
            <label>Add<span class="text-primary">ress</span>:</label>
            <textarea name="address" rows="3" cols="3" placeholder="Enter Student Branch" class="form-control"></textarea>    
          </div>  
        </div>
        <!-- <div class="row mt-3">
          <div class="col-sm-12">
            <label>Profile <span class="text-primary">Photo</span>:</label>
            <input type="file" name="file" class="form-control"/>    
          </div>  
        </div> -->
        <div class="row mt-3 mb-5">
          <div class="col-sm-6 m-auto">
            <input type="submit" name="submit" value="Registrater"  class="form-control btn btn-outline-primary"/>    
          </div>  
        </div>
    </form>
    </div>
  </section>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>