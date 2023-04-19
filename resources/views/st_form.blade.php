<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/datatables.min.css" rel="stylesheet"/>
</head>
<body class="p-3">
    {{-- left div --}}
   
        <div class="row" style="">
            <form action="{{ 'insert-data' }}" method="POST">
                @csrf
                <div class="container col-lg-6 text-left">
                   <h2 class="p-2 text-center">Student Information</h2>
                    <div class="mb-3 row">
                     
                        <label for="id" class="col-sm-3 col-form-label">Id :</label>
                        <div class="col-sm-8">
                           <input type="number" class="form-control" name="id" id="id" placeholder="Student Id"/>
                        </div>
               
                      </div>
                    
                      <div class="mb-3 row">
                     
                        <label for="name" class="col-sm-3 col-form-label">Name :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="name" id="name" placeholder="Name"/>
                        </div>
               
                      </div> 

                      <div class="mb-3 row">
                     
                        <label for="fname" class="col-sm-3 col-form-label">Father Name :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="fname" id="fname" placeholder="Father Name"/>
                        </div>
               
                      </div> 

                      <div class="mb-3 row">
                     
                        <label for="mname" class="col-sm-3 col-form-label">Mother Name :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="mname" id="mname" placeholder="Mother Name"/>
                        </div>
               
                      </div> 

                      <div class="mb-3 row">
                     
                        <label for="loc" class="col-sm-3 col-form-label">Location :</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="loc" id="loc" placeholder="Enter Address"/>
                        </div>
               
                      </div> 

                      <div class="row-md-6 m-3 text-center">
                        <button class="btn btn-primary" type="submit">Add</button>
                        {{-- <button class="btn btn-danger" type="button">Delete</button> --}}
                        
                      </div>
                </div> 
            </form>
       
        </div>
   
       

    {{-- right div --}}
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>