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
            <form action="" method="">
                <div class="container col-lg-6 text-left">
                   
                    <div class="mb-3 row">
                        <label for="ofc" class="col-sm-3 col-form-label">Office : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select ofc">Select One</option>
                            <option value="1">Office-1</option>
                            <option value="2">Office-2</option>
                            
                          </select>
                        </div>
                      </div>
          
                      <div class="mb-3 row">
                        <label for="dept" class="col-sm-3 col-form-label">Department : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select dept">Select One</option>
                            <option value="1">Admin</option>
                            <option value="2">Production Staff</option>
                            <option value="3">Sample</option>
                            <option value="4">Cutting</option>
                            <option value="5">Quality</option>
                            <option value="6">Finishing</option>
                            <option value="7">Sewing</option>
                            <option value="8">General Admin</option>
                            <option value="9">Loder</option>
                            <option value="10">Store</option>
                            <option value="11">Maintenance</option>
                            <option value="12">Sales & Marketing</option>
                            <option value="13">Test Department</option>
                            <option value="14">Support Department</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="design" class="col-sm-3 col-form-label">Designation : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select design">Select One</option>
                            <option value="1">Account Officer</option>
                            <option value="2">Admin Manager</option>
                            <option value="3">Admin Officer</option>
                            <option value="4">Admin Asst.</option>
                            <option value="5">Asst. Cook</option>
                            <option value="6">Asst. Cutting</option>
                            <option value="7">Asst. Electrician</option>
                            <option value="8">Asst. Manager</option>
                            <option value="9">Asst. Operator</option>
                            <option value="10">Asst. Machanics</option>
                            <option value="11">Asst. Merchandiser</option>
                            <option value="12">Asst. Accountant</option>
                            <option value="13">Chairman</option>
                            <option value="14">Commercial Manager</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="emp" class="col-sm-3 col-form-label">Employee : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select emp">Select One</option>
                            <option value="1">1003(Ms. Rina Akter)</option>
                            <option value="2">1006(Ms. Laily Akter)</option>
                            <option value="3">1007(Md. Shipon)</option>
                            <option value="4">1008(Ms. Amena)</option>
                            <option value="5">1009(Ms. Shuhada)</option>
                            <option value="6">1012(Ms. Aduri)</option>
                            <option value="7">1015(Ms. Sumaiya)</option>
                            <option value="8">1018(Ms. Liza Akter)</option>
                            <option value="9">1025(Md. Hafizur Rahman)</option>
                            <option value="10">1031(Md. Sojib Ahmed)</option>
                            <option value="11">1033(Ms. Mariam)</option>
                            <option value="12">1035(Md. Shihab Islam)</option>
                            <option value="13">1045(Ms. Munni Akter)</option>
                            <option value="14">1051(Ms. Salma Akter)</option>
                          </select>
                        </div>
                      </div>
                    
                      <div class="mb-3 row">
                        <label for="base" class="col-sm-3 col-form-label">Based On :</label>
                        <div class="col-sm-8">
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio1" name="base" value="option1">
                            <label class="form-check-label" for="radio1">Basic</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio2" name="base" value="option2">
                            <label class="form-check-label" for="radio2">Gross</label>
                          </div>
                          
                        </div>
                      </div>

    
                </div> 
            {{-- </form> --}}
        {{-- </div> --}}
        
        {{-- <div class="row"  style=""> --}}
            {{-- <form action="" method=""> --}}
                <div class="container col-lg-6 text-left">
                                     
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-3 col-form-label">Type : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select type">Select One</option>
                            <option value="1">Monthly Increment</option>
                            <option value="2">Yearly Increment</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="for" class="col-sm-3 col-form-label">For : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select for">A</option>
                            <option value="1">B</option>
                            <option value="2">Both</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="ref" class="col-sm-4 col-form-label">Ref No : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select ref">Select Ref No</option>
                            <option value="1">Increment/3/2023_A</option>
                            <option value="2">Increment/3/2023_B</option>
                            <option value="2">Increment/3/2023</option>
                          </select>
                        </div>
                      </div>

                     <div class="mb-3 row">
                        <label for="effect" class="col-sm-3 col-form-label">Effective :</label>
                        <div class="col-sm-8">
                        <input type="date" class="form-control" name="effect" id="effect"  placeholder=""/>
                        </div>
                      </div>
                    
                     
                     <div class="row-md-6 m-3 " style="align:right">
                       <button class="btn btn-info text-white" type="submit">Load</button>
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