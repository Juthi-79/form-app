<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
    <style>
        .demo{
            text-align: left;
            background-color: bisque;
        }
    </style>
</head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color:rgb(248, 222, 191); text-color:rgb(49, 18, 18)">
        <a class="navbar-brand" href="#" align="align-justify" aria-hidden="true">RMG ERP Solution</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">

            <div class="dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                  Employee
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Employee Information</a></li>
                  <li><a class="dropdown-item" href="#">Employee List</a></li>
                  <li><a class="dropdown-item" href="#">Salary Payment History</a></li>
                </ul>
              </div>
              <div class="dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                  Settings
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Increment Type</a></li>
                  <li><a class="dropdown-item" href="#">Promotion</a></li>
                  <li><a class="dropdown-item" href="#">Employee Behavior</a></li>
                </ul>
              </div>
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group md-3">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></div>
            </form>
        </div>
    </nav>
    
    
   {{-- <div class="demo"> --}}
    <form action="" method="">
        <div class="container mt-3">
           <h1 class="text-left">Registration</h1>
           <div class="form-group col-md-6">
             <label for="emp_id">Employee ID</label> 
             <div class="input-group md-3">
             <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Enter Employee Id"  required/>
             <button class="btn btn-success" type="button" id="button-addon">Find</button></div>
           </div>
           <div class="form-group col-md-6">
               <label for="uname">User Name</label>
               <input type="text" class="form-control" name="uname" id="uname" placeholder=""/>
               {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
             </div>
             <div class="form-group col-md-6">
               <label for="emp_name">Employee Name</label>
               <input type="text" class="form-control" name="emp_name" id="emp_name" placeholder=""/>
               {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
             </div>
             <div class="form-group col-md-6">
               <label for="oth_lan">Other Language</label>
               <input type="text" class="form-control" name="oth_lan" id="oth_lan"  placeholder=""/>
               {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
             </div>
             <div class="form-group col-md-6">
               <label for="ofc_email">Official Email</label>
               <input type="email" class="form-control" name="ofc_email" id="ofc_email" aria-describedby="emailHelpId" placeholder=""/>
               {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
             </div>
             <div class="form-group col-md-6">
               <label for="designation">Designation : </label>
               <select class="form-select" aria-label="Default select example">
                   <option selected placeholder="selct one"></option>
                   <option value="1">Managing Director</option>
                   <option value="2">Chairman</option>
                   <option value="3">Director</option>
                   <option value="4">General Manager</option>
                 </select>
             </div>
             <div class="form-group col-md-6">
               <label for="floor">Office Floor : </label>
               <select class="form-select" aria-label="Default select example">
                   <option selected></option>
                   <option value="1">1st floor</option>
                   <option value="2">2nd floor</option>
                   <option value="3">Third floor</option>
                 </select>
             </div>
             <div class="mb-6">
               <label for="w_grp">Work Group :</label>
             <div class="form-check form-check-inline">
               <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">
               <label class="form-check-label" for="radio1">Staff</label>
             </div>
             <div class="form-check form-check-inline">
               <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
               <label class="form-check-label" for="radio2">Worker</label>
             </div>
             </div>
             <br>
             <div class="form-group col-md-6">
               <button class="btn btn-success" type="submit">Save</button>
               <button class="btn btn-warning" type="button">Edit</button>
               <button class="btn btn-primary" type="button">Clear</button>
             </div>
        </div>
        
       </form>
   {{-- </div> --}}


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>