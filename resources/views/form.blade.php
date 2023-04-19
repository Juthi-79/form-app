<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    {{-- <div class="container"> --}}
    <div class="mb-3 row">
       <div class="col-lg-5">
        <div class="card">
            <form action="" method="">
                <div class="container col-lg-6">
                   {{-- <h1 class="text-center">Address</h1> --}}
                   
                   <div class="mb-3 row">
                    <label for="type" class="col-sm-3 col-form-label">Type : </label>
                    <div class="col-sm-8">
                    <select class="form-select" aria-label="Default select example">
                        <option selected placeholder="Selct type">Present</option>
                        <option value="1">Permanent</option>
                        {{-- <option value="2">Present</option> --}}
                        
                      </select>
                    </div>
                  </div>
                    
                      <div class="mb-3 row">
                        <label for="division" class="col-sm-3 col-form-label">Division : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Selct division">Select One</option>
                            <option value="1">Barisal</option>
                            <option value="2">Chittagong</option>
                            <option value="3">Dhaka</option>
                            <option value="4">Khulna</option>
                            <option value="5">Mymensingh</option>
                            <option value="6">Rajshahi</option>
                            <option value="7">Rangpur</option>
                            <option value="8">Sylhet</option>
                          </select>
                        </div>
                      </div>
    
                      <div class="mb-3 row">
                        <label for="district" class="col-sm-3 col-form-label">District : </label>
                        <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected placeholder="Select district">Select District</option>
                            <option value="1">Barguna</option>
                            <option value="2">Barishal</option>
                            <option value="3">Bhola</option>
                            <option value="4">Jhalakathi</option>
                            <option value="5">Patuakhali</option>
                            <option value="6">Pirojpur</option>
                            <option value="7">Chittagong</option>
                            <option value="8">Bandarban</option>
                            <option value="9">Rangamati</option>
                            <option value="10">Brahmanbaria</option>
                            <option value="11">Chandpur</option>
                            <option value="12">Cumilla</option>
                            <option value="13">Cox's Bazar</option>
                            <option value="14">Feni</option>
                            <option value="15">Khagrachari</option>
                            <option value="16">Lakshmipur</option>
                            <option value="17">Noakhali</option>
                            <option value="18">Cumilla</option>
                          </select>
                        </div>
                      </div>
    
                     <div class="mb-3 row">
                       <label for="thana" class="col-sm-3 col-form-label" >Thana : </label>
                        <div class="col-sm-8">
                       <select class="form-select" aria-label="Default select example" >
                           <option selected placeholder="Select thana">Select Thana</option>
                           <option value="1">Amtali</option>
                           <option value="2">Bamna</option>
                           <option value="3">Barguna Sadar</option>
                           <option value="4">Betagi</option>
                           <option value="5">Patharghata</option>
                           <option value="6">Taltalioption>
                           <option value="7">O-</option>
                           <option value="8">AB+</option>
                           <option value="4">AB-</option>
                         </select>
                        </div>
                     </div>
    
                     <div class="mb-3 row">
                        <label for="p_code" class="col-sm-3 col-form-label">Post Code : </label>
                         <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" filter="true">
                            <option selected placeholder="Select post code">Select Post Code</option>
                            <option value="1">Amtali-8710</option>
                            <option value="2">Unmarried</option>   
                          </select>
                        </div>
                      </div>
                     
                      <div class="mb-3 row">
                        <label for="area" class="col-sm-3 col-form-label">Area :</label>
                        <div class="col-sm-8">
                        <textarea class="form-control" name="area" id="area"  placeholder="Write address here"/></textarea>
                        </div>
                      </div>
    
                      <div class="mb-3 row">
                        <label for="status" class="col-sm-3 col-form-label">Status :</label>
                        <div class="col-sm-8 pt-2">
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio1" name="status" value="option1" checked>
                            <label class="form-check-label" for="radio1">Active</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio2" name="status" value="option2">
                            <label class="form-check-label" for="radio2">Inactive</label>
                          </div>
                        </div>
                      </div>
    
                     <br>
                     <div class="row-md-6 m-3 text-center">
                       <button class="btn btn-success" type="submit">Save</button>
                       <button class="btn btn-warning" type="button">Edit</button>
                       <button class="btn btn-danger" type="button">Clear</button>
                       <button class="btn btn-primary" type="button">Clear</button>
                     </div>
                </div>
                
               </form>
        </div>
 
        </div>
     </div>
{{-- </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  
</body>
</html>