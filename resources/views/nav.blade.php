<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
       .text-style:hover{
        text-decoration: underline;
       }
    </style> 
</head>
  <body>
      
     <header style="background-color:#1e7b7b">
       
        <nav class="navbar navbar-expand-sm">
            <div class="col-lg-5 mr-auto ml-2">
                <h1 class="text-white">RMG ERP Solution</h1>
            </div>
    
                <ul class="navbar-nav ml-auto p-3">
                    <li class="nav-item active"><a href="#" class="nav-link text-white text-style">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white text-style">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white text-style">Contact us</a></li>
                </ul>
              </div>
                
            </nav>
        </div>
     </header>

     <main>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="per-tab" data-bs-toggle="tab" data-bs-target="#per" type="button" role="tab" aria-controls="per" aria-selected="true">Personal Info</button>
              <button class="nav-link" id="off-tab" data-bs-toggle="tab" data-bs-target="#off" type="button" role="tab" aria-controls="off" aria-selected="false">Official Info</button>
              <button class="nav-link" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="false">Address</button>
              <button class="nav-link" id="nomi-tab" data-bs-toggle="tab" data-bs-target="#nomi" type="button" role="tab" aria-controls="nomi" aria-selected="false">Nominee</button>
              <button class="nav-link" id="academi-tab" data-bs-toggle="tab" data-bs-target="#academi" type="button" role="tab" aria-controls="academi" aria-selected="false">Academic Info</button>
              <button class="nav-link" id="exp-tab" data-bs-toggle="tab" data-bs-target="#exp" type="button" role="tab" aria-controls="exp" aria-selected="false">Experience</button>

              <button class="nav-link" id="asset-tab" data-bs-toggle="tab" data-bs-target="#asset" type="button" role="tab" aria-controls="asset" aria-selected="false">Assets</button>
              <button class="nav-link" id="train-tab" data-bs-toggle="tab" data-bs-target="#train" type="button" role="tab" aria-controls="train" aria-selected="false">Professional Training</button>
              <button class="nav-link" id="pass-tab" data-bs-toggle="tab" data-bs-target="#pass" type="button" role="tab" aria-controls="pass" aria-selected="false">Passport</button>
              
              
              <button class="nav-link" id="pic-tab" data-bs-toggle="tab" data-bs-target="#pic" type="button" role="tab" aria-controls="pic" aria-selected="false">Photo & Signature</button>
              <button class="nav-link" id="dash-tab" data-bs-toggle="tab" data-bs-target="#dash" type="button" role="tab" aria-controls="dash" aria-selected="false">Dashboard</button>
              
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent" style="background-color:#bee1ff">
            <div class="tab-pane fade show active" id="per" role="tabpanel" aria-labelledby="per-tab" tabindex="0">
                <form class="needs-validation" novalidate action="" method="">
                    <div class="container col-lg-6">
                       <h1 class="text-center">Personal Information</h1>
                       
                       <div class="mb-3 row">
                         
                           <label for="fname" class="col-sm-3 col-form-label">Father Name :</label>
                           <div class="col-sm-8">
                              <input type="text" class="form-control" name="fname" id="fname" placeholder="Father Name" required>
                           </div>
                           
                         </div>

                    
                         <div class="mb-3 row">
                           <label for="mname" class="col-sm-3 col-form-label">Mother Name :</label>
                           <div class="col-sm-8">
                           <input type="text" class="form-control" name="mname" id="mname" placeholder="Mother Name"/>
                           </div>
                         </div>
                         <div class="mb-3 row">
                           <label for="height" class="col-sm-3 col-form-label">Height :</label>
                           <div class="col-sm-8">
                           <input type="text" class="form-control" name="height" id="height"  placeholder="Height"/>
                           </div>
                         </div>
                         <div class="mb-3 row">
                            <label for="contact" class="col-sm-3 col-form-label">Contact No :</label>
                            <div class="col-sm-8">
                            <input type="tel" class="form-control" name="contact" id="contact"  placeholder="Contact No"/>
                            </div>
                          </div>
                         <div class="mb-3 row">
                           <label for="validationDefaultUsername" class="col-sm-3 col-form-label">Personal Email : </label>
                           <div class="col-sm-8">
                           <input type="email" class="form-control" name="validationDefaultUsername" id="validationDefaultUsername" aria-describedby="emailHelpId" placeholder="Email" required/>
                           </div>
                         </div>
                         <div class="mb-3 row">
                            <label for="dob" class="col-sm-3 col-form-label">Date of Birth :</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="dob" id="dob"  placeholder="Date of Birth"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="gender" class="col-sm-3 col-form-label">Gender :</label>
                            <div class="col-sm-8">
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio1" name="gender" value="option1">
                                <label class="form-check-label" for="radio1">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio2" name="gender" value="option2">
                                <label class="form-check-label" for="radio2">Female</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input type="radio" class="form-check-input" id="radio3" name="gender" value="option2">
                                 <label class="form-check-label" for="radio2">Others</label>
                              </div>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="religion" class="col-sm-3 col-form-label">Religion : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Select Religion">Select Religion</option>
                                <option value="1">Islam</option>
                                <option value="2">Hindu</option>
                                <option value="3">Christian</option>
                                <option value="4">Buddhist</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="national" class="col-sm-3 col-form-label">Nationality :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="national" id="national"  placeholder="Nationality"/>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="national_id" class="col-sm-3 col-form-label">National Id:</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="national_id" id="national_id"  placeholder="National Id"/>
                             </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="b_cirtificate" class="col-sm-3 col-form-label">Birth Certificate:</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="b_cirtificate" id="b_cirtificate"  placeholder="Birth Certificate"/>
                             </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="tin" class="col-sm-3 col-form-label">TIN:</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="tin" id="tin"  placeholder="TIN"/>
                             </div>
                          </div>

                         <div class="mb-3 row">
                           <label for="b_grp" class="col-sm-3 col-form-label" >Blood Group: </label>
                            <div class="col-sm-8">
                           <select class="form-select" aria-label="Default select example" >
                               <option selected placeholder="Select Blood Group">Select Blood Group</option>
                               <option value="1">A+</option>
                               <option value="2">A-</option>
                               <option value="3">B+</option>
                               <option value="4">B-</option>
                               <option value="5">B-</option>
                               <option value="6">O+</option>
                               <option value="7">O-</option>
                               <option value="8">AB+</option>
                               <option value="9">AB-</option>
                             </select>
                            </div>
                         </div>

                         <div class="mb-3 row">
                            <label for="marital" class="col-sm-3 col-form-label">Marital Status: </label>
                             <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" filter="true">
                                <option selected placeholder="Select Marital Status">Select Marital Status</option>
                                <option value="1">Married</option>
                                <option value="2">Unmarried</option>   
                              </select>
                            </div>
                          </div>
                         
                          <div class="mb-3 row">
                            <label for="ec_name" class="col-sm-3 col-form-label">Emergency Contact Name:</label>
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="ec_name" id="ec_name"  placeholder="Emergency Contact Name"/>
                             </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="ec_addr" class="col-sm-3 col-form-label">Emergency Contact Address:</label>
                             <div class="col-sm-8">
                            <textarea class="form-control" name="ec_addr" id="ec_addr"  placeholder="Emergency Contact Address"></textarea>
                             </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="ec_no" class="col-sm-3 col-form-label">Emergency Contact No:</label>
                             <div class="col-sm-8">
                            <input type="tel" class="form-control" name="ec_no" id="ec_no"  placeholder="Emergency Contact No"/>
                             </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="ec_name" class="col-sm-3 col-form-label">Emergency Contact Person Relation : </label>
                            
                            
                             <div class="col-sm-8">
                            <input type="text" class="form-control" name="ec_rel" id="ec_rel"  placeholder="Emergency Contact Relation"/>
                             </div>
                             
                          </div>

                         <br>
                         <div class="row-md-6 m-3 text-center">
                           <button class="btn btn-success" type="submit">Save</button>
                           <button class="btn btn-warning" type="button">Edit</button>
                           <button class="btn btn-primary" type="button">Clear</button>
                         </div>
                    </div>
                    
                   </form>
            </div>

            {{-- personal page ends --}}

            <div class="tab-pane fade" id="off" role="tabpanel" aria-labelledby="off-tab" tabindex="0">
                <form action="" method="">
                    <div class="container col-lg-6">
                        <h1 class="text-center">Official Information</h1>
                        
                        <div class="mb-3 row">
                          



                            <label for="emp_id" class="col-sm-3 col-form-label">Employee Id :</label>
                            <div class="col-sm-8">
                               <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Enter Employee Id"/>
                            </div>
                            
                          </div>
 
                     
                          <div class="mb-3 row">
                            <label for="uname" class="col-sm-3 col-form-label">User Name :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="uname" id="uname" placeholder="User Name"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="emp_name" class="col-sm-3 col-form-label">Employee Name :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="emp_name" id="emp_name" placeholder="Enter Employee Name"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="other_lang" class="col-sm-3 col-form-label">Other Language :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="other_lang" id="other_lang"  placeholder="Employee Name Other Lang"/>
                            </div>
                          </div>
                          {{-- <div class="mb-3 row">
                             <label for="contact" class="col-sm-3 col-form-label">Contact No :</label>
                             <div class="col-sm-8">
                             <input type="tel" class="form-control" name="contact" id="contact"  placeholder="Contact No"/>
                             </div>
                           </div> --}}
                          <div class="mb-3 row">
                            <label for="ofc_email" class="col-sm-3 col-form-label">Official Email : </label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control" name="ofc_email" id="ofc_email" aria-describedby="emailHelpId" placeholder="Enter Official Email"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="designation" class="col-sm-3 col-form-label">Designation : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct one">Select One</option>
                                <option value="1">Managing Director</option>
                                <option value="2">Chairman</option>
                                <option value="3">Director</option>
                                <option value="4">General Manager</option>
                                <option value="5">Production GM</option>
                                <option value="6">Production Manager</option>
                                <option value="7">Merchandising Manager</option>
                                <option value="8">Sr.Merchandiser</option>
                                <option value="9">Merchandiser</option>
                                <option value="10">Asst. Merchandiser</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="office" class="col-sm-3 col-form-label">Office : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct one">Select One</option>
                                <option value="1">Office1</option>
                                <option value="2">Office2</option>
                                <option value="3">Office3</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="shift" class="col-sm-3 col-form-label">Shift/Shift Group : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct one">Select One</option>
                                <option value="1">General</option>
                                <option value="2">Office Staff</option>
                                <option value="3">RAMADAN</option>
                                <option value="3">RS</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <div class="col-md-3"></div>
                          <div class="form-check col-md-8 ml-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Is Roastering Employee
                            </label>
                          </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ofc_flr" class="col-sm-3 col-form-label">Office Floor : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct office floor">Select One</option>
                                <option value="1">1st Floor</option>
                                <option value="2">2nd Floor</option>
                                <option value="3">3rd Floor</option>
                                <option value="4">4th Floor</option>
                                <option value="5">5th Floor</option>
                                <option value="6">6th Floor</option>
                                <option value="7">7th Floor</option>
                                <option value="8">Test Floor</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="dept" class="col-sm-3 col-form-label">Department: </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct dept">Select One</option>
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
                            <label for="otr_resp" class="col-sm-3 col-form-label">Others Responsibility: </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct One">Select One</option>
                                <option value="1">Administration</option>
                                <option value="2">Production Staff</option>
                                <option value="3">Sample</option>
                                <option value="4">Cutting</option>
                                <option value="5">Quality</option>
                                <option value="6">Finishing</option>
                                <option value="7">Line-A</option>
                                <option value="8">Sewing Line-A(Asst. Operator)</option>
                                <option value="9">Sewing Line-A(Iron Man)</option>
                                <option value="10">Line-B</option>
                                <option value="11">Sewing Line-B(Operator)</option>
                                <option value="12">Sewing Line-B(Iron Man)</option>
                                <option value="13">Line-C</option>
                                <option value="14">Sewing Line-C(Asst. Operator)</option>
                                <option value="15">Sewing Line-C(Iron Man)</option>
                                <option value="16">Line-D</option>
                                <option value="17">Sewing Line-D(Asst. Operator)</option>
                                <option value="18">Sewing Line-D(Iron Man)</option>
                                <option value="19">Sewing Line-E(Operator)</option>
                                <option value="20">Sewing Line-E(Asst. Operator)</option>
                                <option value="21">Sewing Line-E(Iron Man)</option>
                                <option value="22">Sewing Line-F(Operator)</option>
                                <option value="23">Sewing Line-F(Asst. Operator)</option>
                                <option value="24">Sewing Line-F(Iron Man)</option>
                                <option value="25">Store</option>
                                <option value="26">Test Section</option>
                              </select>
                            </div>
                          </div>

                           <div class="mb-3 row">
                             <label for="work" class="col-sm-3 col-form-label">Work Group :</label>
                             <div class="col-sm-8 pt-2">
                               <div class="form-check form-check-inline">
                                 <input type="radio" class="form-check-input" id="radio1" name="work" value="option1">
                                 <label class="form-check-label" for="radio1">Staff</label>
                               </div>
                               <div class="form-check form-check-inline">
                                 <input type="radio" class="form-check-input" id="radio2" name="work" value="option2">
                                 <label class="form-check-label" for="radio2">Worker</label>
                               </div>
                             </div>
                           </div>

                           <div class="mb-3 row">
                            <label for="salary" class="col-sm-3 col-form-label">Salary Type :</label>
                            <div class="col-sm-8 pt-2">
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio1" name="salary" value="option1">
                                <label class="form-check-label" for="radio1">Regular</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio2" name="salary" value="option2">
                                <label class="form-check-label" for="radio2">Production</label>
                              </div>
                            </div>
                          </div>
 
                          <div class="mb-3 row">
                            <label for="ac_no" class="col-sm-3 col-form-label">Card No/AC No :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="ac_no" id="ac_no"  placeholder="Card No/AC No"/>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="join_date" class="col-sm-3 col-form-label">Joining Date :</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="join_date" id="join_date"  placeholder="Joining Date"/>
                            </div>
                          </div>

                           <div class="mb-3 row">
                             <label for="grade" class="col-sm-3 col-form-label">Grade : </label>
                             <div class="col-sm-8">
                             <select class="form-select" aria-label="Default select example">
                                 <option selected placeholder="Selct grade">Select One</option>
                                 <option value="1">Grade-1</option>
                                 <option value="2">Grade-2</option>
                                 <option value="3">Grade-3</option>
                                 <option value="4">Grade-4</option>
                                 <option value="5">Grade-5</option>
                                 <option value="6">Grade-6</option>
                                 <option value="7">Grade-7</option>
                                 <option value="8">Grade-N/A</option>
                                 <option value="9">Grade-9</option>
                                 <option value="10">Grade-10</option>
                                 <option value="11">Trainee</option>
                                 <option value="12">Test Grade One</option>
                                 <option value="13">Grade-1</option>
                                 <option value="14">Grade-11</option>
                                 <option value="15">Grade-A</option>
                               </select>
                             </div>
                           </div>
                           <div class="mb-3 row">
                            <label for="gross" class="col-sm-3 col-form-label">Gross :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="gross" id="gross"  placeholder="Gross"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="sec_gross" class="col-sm-3 col-form-label">Second Gross :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="sec_gross" id="sec_gross"  placeholder="Second Gross"/>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="emp_type" class="col-sm-3 col-form-label">Employee Type : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct emp_type">Select One</option>
                                <option value="1">Test Type Employee</option>
                                <option value="2">Contractual</option>
                                <option value="3">Permanent</option>
                                <option value="4">Full-time</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="con_st" class="col-sm-3 col-form-label">Contract Start Date :</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="con_st" id="con_st"  placeholder="Contract Start Date"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="con_end" class="col-sm-3 col-form-label">Contract End Date :</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="con_end" id="con_end"  placeholder="Contract End Date"/>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="work_type" class="col-sm-3 col-form-label">Type of Work : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct work_type">Select One</option>
                                <option value="1">Laber</option>
                                <option value="2">Worker</option>
                                
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="emp_grp" class="col-sm-3 col-form-label">Employee Group : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct emp_grp">Select One</option>
                                <option value="1">Admin Officer</option>
                                <option value="2">Test Group A</option>
                                <option value="3">Test Group B</option>
                                
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="manager" class="col-sm-3 col-form-label">Manager : </label>
                            <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example">
                                <option selected placeholder="Selct manager">Select One</option>
                                <option value="1">1002(Ms. Kona Akter)</option>
                                <option value="2">1003(Ms. Rina Akter)</option>
                                <option value="3">1006(Ms. Laily Akter)</option>
                                <option value="4">1007(Md. Shipon)</option>
                                <option value="5">1008(Ms. Amena)</option>
                                <option value="6">1009(Ms. Shuhada)</option>
                                <option value="7">1012(Ms. Joshna-1)</option>
                                <option value="8">1013(Ms. Aduri)</option>
                                <option value="9">1015(Ms. Sumaiya)</option>
                                <option value="10">1017(Ms. Joshna-2)</option>
                                <option value="11">1018(Ms. Liza Akter)</option>
                                <option value="12">1019(Ms. Tanjila)</option>
                                <option value="13">1021(Ms. Sharmin Akter)</option>
                                <option value="14">1024(Ms. Shuhada-3)</option>
                                <option value="15">1025(Md. Hafizur Rahman)</option>
                                <option value="16">1026(Ms. Rima Akter)</option>
                                <option value="17">1030(Ms. Shaila)</option>
                                <option value="18">1031(Md. Shojib Ahmed)</option>
                                <option value="19">1033(Ms. Morium-1)</option>
                                <option value="20">1035(Md. Shihab Islam)</option>
                              </select>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="job_loc" class="col-sm-3 col-form-label">Job Location :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="job_loc" id="job_loc"  placeholder="Job Location"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="pro_period" class="col-sm-3 col-form-label">Probation Period :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="pro_period" id="pro_period"  placeholder="Month"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="conf_date" class="col-sm-3 col-form-label">Confirmation Date :</label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="conf_date" id="conf_date"  placeholder="Confirmation Date"/>
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="off_phn" class="col-sm-3 col-form-label">Official Phone & PABX Ext. No :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="off_phn" id="off_phn"  placeholder="Official Phone & PABX Ext. No"/>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="bank_ac" class="col-sm-3 col-form-label">Bank A/C No :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="bank_ac" id="bank_ac"  placeholder="Bank Acc No"/>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="bank_info" class="col-sm-3 col-form-label">Bank Info :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="bank_info" id="bank_info"  placeholder="Bank Name, Branch Name"/>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="global_id" class="col-sm-3 col-form-label">Global Id :</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="global_id" id="global_id"  placeholder="Empoyee Global Id No"/>
                            </div>
                          </div>
 
                          <div class="mb-3 row">
                            <label for="identifier" class="col-sm-3 col-form-label">Identifier :</label>
                            <div class="col-sm-8">
                            <textarea type="text" class="form-control" name="identifier" id="identifier"  placeholder="Empoyee Identifier"/></textarea>
                            </div>
                          </div>
 
                          <div class="mb-3 row">
                            <label for="pay_mode" class="col-sm-3 col-form-label" >Payment Mode: </label>
                             <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" >
                                <option selected placeholder="Select Payment Mode">Cash</option>
                                <option value="1">Cash</option>
                                <option value="2">Bank</option>
                                <option value="3">Bkash</option>
                                <option value="4">Nagad</option>
                                <option value="5">Rocket</option>
                              </select>
                             </div>
                          </div>
 
                          <div class="mb-3 row">
                          <label for="leave_proc" class="col-sm-3 col-form-label">Is Leave Auto Process : </label>
                          <div class="form-check col-sm-9">
                            <input class="form-check-input" type="checkbox" value="" id="leave_proc">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="leave_open" class="col-sm-3 col-form-label">Is Leave Auto Open : </label>
                          <div class="form-check col-sm-9">
                            <input class="form-check-input" type="checkbox" value="" id="leave_open" checked>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="leave_fixed" class="col-sm-3 col-form-label">Is Fixed Leave : </label>
                          <div class="form-check col-sm-9">
                            <input class="form-check-input" type="checkbox" value="" id="leave_fixed">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="honor" class="col-sm-3 col-form-label">Is Honorarium : </label>
                          <div class="form-check col-sm-9">
                            <input class="form-check-input" type="checkbox" value="" id="honor">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="pf_elig" class="col-sm-3 col-form-label">Is PF Eligible : </label>
                          <div class="form-check col-sm-9">
                            <input class="form-check-input" type="checkbox" value="" id="pf_elig">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="ot_pay" class="col-sm-3 col-form-label">Is OT Payable : </label>
                          <div class="form-check col-sm-1">
                            <input class="form-check-input" type="checkbox" value="" id="ot_pay" checked>
                          </div>
                          <div class="form-check col-sm-8">
                            <input class="form-check-input" type="checkbox" value="" id="ot_pay" disable>
                            <label class="form-check-label" for="ot_pay">Is Buyer OT</label>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="mask" class="col-sm-3 col-form-label">Is Masked : </label>
                          <div class="form-check col-sm-9">
                            <input class="form-check-input" type="checkbox" value="" id="mask">
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="emp_status" class="col-sm-3 col-form-label">Employee Status :</label>
                          <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" id="radio1" name="emp_status" value="option1" checked>
                              <label class="form-check-label" for="radio1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" id="radio2" name="emp_status" value="option2">
                              <label class="form-check-label" for="radio2">Inactive</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" id="radio3" name="emp_status" value="option3">
                              <label class="form-check-label" for="radio2">Lefty</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input type="radio" class="form-check-input" id="radio4" name="emp_status" value="option4">
                              <label class="form-check-label" for="radio2">Hold</label>
                            </div>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="discont_date" class="col-sm-3 col-form-label">Date of Discontinuation :</label>
                          <div class="col-sm-8">
                          <input type="date" class="form-control" name="discont_date" id="discont_date"  placeholder=""/>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="discont_reason" class="col-sm-3 col-form-label">Date of Discontinuation :</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" name="discont_reason" id="discont_reason"  placeholder=""/>
                          </div>
                        </div>
 
                          <br>
                          <div class="row-md-6 m-3 text-center">
                            <button class="btn btn-success" type="submit">Save</button>
                            <button class="btn btn-warning" type="button">Edit</button>
                            <button class="btn btn-primary" type="button">Clear</button>
                          </div>
                     </div>
                    
                   </form>
            </div>

            {{-- Official page ends --}}

            {{-- Address page starts --}}
            <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab" tabindex="0">
              <form action="" method="">
                  <div class="container col-lg-6">
                     <h1 class="text-center">Address</h1>
                     
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

          {{-- Nominee page starts --}}
          <div class="tab-pane fade show active" id="nomi" role="tabpanel" aria-labelledby="nomi-tab" tabindex="0">
            <form action="" method="">
                <div class="container col-lg-6">
                   <h1 class="text-center p-2">Nominee</h1>
                   
                   <div class="mb-3 row">
                     
                       <label for="name" class="col-sm-3 col-form-label">Name :</label>
                       <div class="col-sm-8">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name"/>
                       </div>
              
                     </div>

                
                     <div class="mb-3 row">
                       <label for="nid" class="col-sm-3 col-form-label">NID :</label>
                       <div class="col-sm-8">
                       <input type="text" class="form-control" name="nid" id="nid" placeholder="National Id"/>
                       </div>
                     </div>
                     <div class="mb-3 row">
                       <label for="relation" class="col-sm-3 col-form-label">Relation :</label>
                       <div class="col-sm-8">
                       <input type="text" class="form-control" name="relation" id="relation"  placeholder="Relation"/>
                       </div>
                     </div>
                     <div class="mb-3 row">
                        <label for="dob" class="col-sm-3 col-form-label">Date of Birth :</label>
                        <div class="col-sm-8">
                        <input type="date" class="form-control" name="dob" id="dob"  placeholder="Date of Birth"/>
                        </div>
                      </div>
                    
                      <div class="mb-3 row">
                        <label for="gender" class="col-sm-3 col-form-label">Gender :</label>
                        <div class="col-sm-8">
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio1" name="gender" value="option1">
                            <label class="form-check-label" for="radio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio2" name="gender" value="option2">
                            <label class="form-check-label" for="radio2">Female</label>
                          </div>
                          <div class="form-check form-check-inline">
                             <input type="radio" class="form-check-input" id="radio3" name="gender" value="option2">
                             <label class="form-check-label" for="radio2">Others</label>
                          </div>
                        </div>
                      </div>

                      <div class="mb-3 row">
                       <label for="cont_add" class="col-sm-3 col-form-label">Contact Address : </label>
                       <div class="col-sm-8">
                       <input type="email" class="form-control" name="cont_add" id="cont_add" aria-describedby="" placeholder="Contact Address & No"/>
                       </div>
                     </div>

                     <div class="mb-3 row">
                      <label for="email" class="col-sm-3 col-form-label">Email : </label>
                      <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email"/>
                      </div>
                    </div>
                      
                    <div class="mb-3 row">
                      <label for="photo" class="form-label col-sm-3">Photo :</label>
                      <div class="col-sm-2"><i class="fa-solid fa-image"></i></div>
                      <div class="col-sm-6">
                        <input class="form-control" type="file" id="photo">
                      </div>                      
                    </div>

                    <div class="mb-3 row">
                      <label for="sign" class="form-label col-sm-3">Signature :</label>
                      <div class="col-sm-8">
                        <input class="form-control" type="file" id="sign">
                      </div>                      
                    </div>

                     <br>
                     <div class="row-md-6 m-3 text-center">
                       <button class="btn btn-white border-black" type="submit">Add</button>
                       <button class="btn btn-danger" type="button">Delete</button>
                       
                     </div>
                </div>
                
               </form>
        </div>


        {{-- Academic Info page starts --}}
        <div class="tab-pane fade show active" id="academi" role="tabpanel" aria-labelledby="academi-tab" tabindex="0">
          <form action="" method="">
              <div class="container col-lg-6 p-3">
                 <h1 class="text-center">Academic Info</h1>

                 <div class="mb-3 row">
                  <label for="degree" class="col-sm-3 col-form-label">Degree : </label>
                  <div class="col-sm-8">
                  <select class="form-select" aria-label="Default select example">
                      <option selected placeholder="Select degree">Select Qualification</option>
                      <option value="1">Bsc</option>
                      <option value="2">Msc</option>
                      <option value="3">BBA</option>
                      <option value="4">MBA</option>
                      <option value="5">BA</option>
                      <option value="6">MA</option>
                      <option value="7">SSC</option>
                      <option value="8">HSC</option>
                      <option value="9">Diploma</option>
                    </select>
                  </div>
                </div>

                 <div class="mb-3 row">
                   
                     <label for="level" class="col-sm-3 col-form-label">Level :</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="level"  id="level" placeholder="Level"/>
                     </div>
                     
                   </div>

              
                   <div class="mb-3 row">
                     <label for="institute" class="col-sm-3 col-form-label">Institute :</label>
                     <div class="col-sm-8">
                     <input type="text" class="form-control" name="institute" id="institute" placeholder="Institute"/>
                     </div>
                   </div>
                   <div class="mb-3 row">
                     <label for="brd_uni" class="col-sm-3 col-form-label">Board/University :</label>
                     <div class="col-sm-8">
                     <input type="text" class="form-control" name="brd_uni" id="brd_uni"  placeholder="Board or University"/>
                     </div>
                   </div>
                   <div class="mb-3 row">
                      <label for="session" class="col-sm-3 col-form-label">Session :</label>
                      <div class="col-sm-8">
                      <input type="tel" class="form-control" name="session" id="session"  placeholder="Session"/>
                      </div>
                    </div>
                   

                    <div class="mb-3 row">
                      <label for="pass_yr" class="col-sm-3 col-form-label">Passing Year : </label>
                      <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example">
                          <option selected placeholder="Selct pass_yr">Select Passing Year</option>
                          <option value="1">2006</option>
                          <option value="2">2007</option>
                          <option value="3">2008</option>
                          <option value="4">2009</option>
                          <option value="5">2010</option>
                          <option value="6">2011</option>
                          <option value="7">2012</option>
                          <option value="8">2013</option>
                          <option value="9">2014</option>
                          <option value="10">2015</option>
                          <option value="11">2016</option>
                          <option value="12">2017</option>
                          <option value="13">2018</option>
                          <option value="14">2019</option>
                          <option value="15">2020</option>
                          <option value="16">2021</option>
                          <option value="17">2022</option>
                          <option value="18">2023</option>
                          <option value="19">2024</option>
                          <option value="20">2025</option>
                          
                        </select>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="sub_grp" class="col-sm-3 col-form-label">Subject/Group :</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" name="sub_grp" id="sub_grp"  placeholder="Subject or Group"/>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="gpa" class="col-sm-3 col-form-label">Division/GPA:</label>
                       <div class="col-sm-8">
                      <input type="text" class="form-control" name="gpa" id="gpa"  placeholder="Result"/>
                       </div>
                    </div>

                    

                   <br>
                   <div class="row-md-6 m-3 text-right">
                     <button class="btn btn-white border-black" type="submit">Add</button>
                     <button class="btn btn-danger" type="button">Delete</button>
                     
                   </div>
              </div>
              
             </form>
      </div>

      {{-- Experience page starts --}}
      <div class="tab-pane fade show active" id="exp" role="tabpanel" aria-labelledby="exp-tab" tabindex="0">
        <form action="" method="">
            <div class="container col-lg-6 p-2">
               <h1 class="text-center p-2">Experience</h1>
               
               <div class="mb-3 row">
                 
                   <label for="designation" class="col-sm-3 col-form-label">Designation :</label>
                   <div class="col-sm-8">
                      <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation"/>
                   </div>
                   
                 </div>

            
                 <div class="mb-3 row">
                   <label for="org_add" class="col-sm-3 col-form-label">Organization Name & Address :</label>
                   <div class="col-sm-8">
                   <textarea class="form-control" name="org_add" id="org_add" placeholder="Organization Name & Address"/></textarea>
                   </div>
                 </div>
                 

                  <div class="mb-3 row">
                    <label for="dept" class="col-sm-3 col-form-label">Department :</label>
                     <div class="col-sm-8">
                    <input type="text" class="form-control" name="dept" id="dept"  placeholder="Department"/>
                     </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="date_from" class="col-sm-3 col-form-label">Date From :</label>
                     <div class="col-sm-8">
                    <input type="date" class="form-control" name="date_from" id="date_from"  placeholder="Date From"/>
                     </div>
                  </div>
                 
                  <div class="mb-3 row">
                    <label for="date_to" class="col-sm-3 col-form-label">Date To :</label>
                     <div class="col-sm-8">
                    <input type="date" class="form-control" name="date_to" id="date_to"  placeholder="Date To"/>
                     </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="response" class="col-sm-3 col-form-label">Responsibilities:</label>
                     <div class="col-sm-8">
                    <textarea class="form-control" name="response" id="response"  placeholder="Responsibilities"></textarea>
                     </div>
                  </div>

                  

                 <br>
                 <div class="row-md-6 m-3 text-right">
                   <button class="btn btn-white border-black" type="submit">Add</button>
                   <button class="btn btn-danger" type="button">Delete</button>
                   
                 </div>
            </div>
            
           </form>
    </div>

        {{-- Assets page starts --}}

        <div class="tab-pane fade show active" id="asset" role="tabpanel" aria-labelledby="asset-tab" tabindex="0">

          <div class="container col-lg-6 p-2">
            <div class="mb-3 row">
                <label for="op_type" class="col-sm-3 col-form-label">Operation Type :</label>
                <div class="col-sm-8">

                  <nav>
                    <div class="nav nav-radio" id="nav-tab" role="tablist">
                        <button class="nav-link checked" id="assign-tab" data-bs-toggle="tab" data-bs-target="#assign" type="radio" role="tab" aria-controls="assign" aria-selected="true">Assign Assets</button>
                        <button class="nav-link" id="return-tab" data-bs-toggle="tab" data-bs-target="#return" type="radio" role="tab" aria-controls="return" aria-selected="false">Return Assets</button>
                    </div>
                  </nav>
                </div>
            </div>
            
            <div class="tab-content" id="nav-tabContent" style="background-color:#c2f0f0">
              <div class="tab-pane fade show active" id="assign" role="tabpanel" aria-labelledby="assign-tab" tabindex="0">
                
                <form action="" method="">
                  {{-- <div class="container col-lg-6"> --}}
                     
                    <div class="mb-3 row">
                      <label for="asset" class="col-sm-3 col-form-label">Asset : </label>
                      <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example">
                          <option selected placeholder="Select asset">All</option>
                          <option value="1">Islam</option>
                          <option value="2">Hindu</option>
                          <option value="3">Christian</option>
                          <option value="4">Buddhist</option>
                        </select>
                      </div>
                    </div>

                  
                       <div class="mb-3 row">
                         <label for="ass_date" class="col-sm-3 col-form-label">Assign Date :</label>
                         <div class="col-sm-8">
                         <input type="date" class="form-control" name="ass_date" id="ass_date" placeholder=""/>
                         </div>
                       </div>
                      
      
                        <div class="mb-3 row">
                          <label for="quantity" class="col-sm-3 col-form-label">Quantity :</label>
                          <div class="col-sm-8">
                          <input type="text" class="form-control" name="quantity" id="quantity"  placeholder="Quantity"/>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="purpose" class="col-sm-3 col-form-label">Purpose :</label>
                           <div class="col-sm-8">
                          <textarea class="form-control" name="purpose" id="purpose"  placeholder="Purpose"/></textarea>
                           </div>
                        </div>

                       <br>
                       <div class="row-md-6 m-3 text-center">
                         <button class="btn btn-success" type="submit">Save</button>
                         <button class="btn btn-warning" type="button">Update</button>
                         
                       </div>
                  </div>
                  
                 </form>
                                     
              </div>
  
              <div class="tab-pane fade show active" id="return" role="tabpanel" aria-labelledby="return-tab" tabindex="0">
                <div class="row">
                  <div class="col-lg-8">
                      <div class="card text-center">
                          <div class="card-header">
                              Header
                          </div>
                          <div class="card-body" style="background-color:beige">
                              {{-- <img src="https://st4.depositphotos.com/16122460/26848/i/600/depositphotos_268484380-stock-photo-bouquet-of-beautiful-bright-gerbera.jpg" class="card-img-top" alt="flower"> --}}
                              <h4 class="card-title text-black">Flower</h4>
                              
                          </div>
                          <div class="card-footer"></div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Professional Training page starts --}}
        <div class="tab-pane fade show active" id="train" role="tabpanel" aria-labelledby="train-tab" tabindex="0">
          <form action="" method="">
              <div class="container col-lg-6 p-2">
                 <h1 class="text-center p-2">Professional Training</h1>
                 
                 <div class="mb-3 row">
                   
                     <label for="title" class="col-sm-3 col-form-label">Title :</label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title"/>
                     </div>
                     
                   </div>
  
              
                   <div class="mb-3 row">
                     <label for="conduct" class="col-sm-3 col-form-label">Conducted/Organized By :</label>
                     <div class="col-sm-8">
                     <textarea class="form-control" name="conduct" id="conduct" placeholder="Organized By"/></textarea>
                     </div>
                   </div>
                   

  
                    <div class="mb-3 row">
                      <label for="date_from" class="col-sm-3 col-form-label">Start Date:</label>
                       <div class="col-sm-8">
                      <input type="date" class="form-control" name="date_from" id="date_from"  placeholder="Start Date"/>
                       </div>
                    </div>
                   
                    <div class="mb-3 row">
                      <label for="date_to" class="col-sm-3 col-form-label">End Date :</label>
                       <div class="col-sm-8">
                      <input type="date" class="form-control" name="date_to" id="date_to"  placeholder="End Date"/>
                       </div>
                    </div>
  
                    <div class="mb-3 row">
                      <label for="topic" class="col-sm-3 col-form-label">Topics :</label>
                       <div class="col-sm-8">
                      <textarea class="form-control" name="topic" id="topic"  placeholder="Topics"></textarea>
                       </div>
                    </div>
  
                    
  
                   <br>
                   <div class="row-md-6 m-3 text-justify">
                     <button class="btn btn-white border-black" type="submit">Add</button>
                     <button class="btn btn-danger" type="button">Delete</button>
                     
                   </div>
              </div>
              
             </form>
      </div>

          {{-- Passport Page starts  --}}
            <div class="tab-pane fade" id="pass" role="tabpanel" aria-labelledby="pass-tab" tabindex="0">
                <form action="" method="">
                    <div class="container mt-3 col-lg-6 p-2">
                       <h1 class="text-left">Passport</h1>

                       <div class="mb-3 row">
                           <label for="pass_no" class="col-sm-3 col-form-label">Passport No :</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control" name="pass_no" id="pass_no" placeholder="Passport No"/>
                           </div>
                         </div>

                         <div class="mb-3 row">
                           <label for="iss_dt" class="col-sm-3 col-form-label">Issue Date : </label>
                           <div class="col-sm-8">
                           <input type="date" class="form-control" name="iss_dt" id="iss_dt" placeholder="Issue Date"/>
                          </div>
                         </div>

                         <div class="mb-3 row">
                           <label for="exp_dt" class="col-sm-3 col-form-label">Expire Date : </label>
                           <div class="col-sm-8">
                           <input type="date" class="form-control" name="exp_dt" id="exp_dt"  placeholder="Expire Date"/>
                          </div>
                         </div>
                         <div class="mb-3 row">
                           <label for="iss_auth" class="col-sm-3 col-form-label">Issuing Authority : </label>
                           <div class="col-sm-8">
                           <input type="email" class="form-control" name="iss_auth" id="iss_auth" aria-describedby="" placeholder="Issuing Authority"/>
                          </div>
                         </div>

                         <div class="mb-3 row">
                          <label for="remark" class="col-sm-3 col-form-label">Remarks : </label>
                          <div class="col-sm-8">
                          <input type="email" class="form-control" name="remark" id="remark" aria-describedby="" placeholder="Remarks"/>
                         </div>
                        </div>
                         
                         </div>
                         <br>
                         <div class="row-md-6 m-3 text-center">
                           <button class="btn btn-success" type="submit">Save</button>
                           <button class="btn btn-warning" type="button">Edit</button>
                           <button class="btn btn-primary" type="button">Clear</button>
                         </div>
                    </div>
                    
                   </form>
            </div>

            {{-- photo & signature page starts --}}

            <div class="tab-pane fade show active" id="pic" role="tabpanel" aria-labelledby="pic-tab" tabindex="0">
              <form action="" method="">
                  <div class="container col-lg-6">
                     <h1 class="text-center p-2">Photo & Signature</h1>
                        
                      <div class="mb-3 row">
                        <label for="photo" class="form-label col-sm-3">Photo :</label>
                        {{-- <div class="col-sm-2"><i class="fa-solid fa-image"></i></div> --}}
                        <div class="col-sm-8">
                          <input class="form-control" type="file" id="photo">
                        </div>                      
                      </div>
  
                      <div class="mb-3 row">
                        <label for="sign" class="form-label col-sm-3">Signature :</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="file" id="sign">
                        </div>                      
                      </div>
  
                       <br>
                       <div class="row-md-6 m-3 text-center">
                         <button class="btn btn-success" type="submit">Save</button>
                         <button class="btn btn-primary" type="button">Clear</button>
                         
                       </div>
                  </div>
                  
                 </form>
          </div>

            {{-- dashboard page starts --}}
            <div class="tab-pane fade" id="dash" role="tabpanel" aria-labelledby="dash-tab" tabindex="0">
                <div class="tutorial-section">
                    <div class="title text-center mb-3">
                        <h2 class="font-weight-bolder">Tutorial</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card text-center">
                                {{-- <div class="card-header">
                                    
                                </div> --}}
                                <div class="card-body bg-primary">
                                    <img src="https://st4.depositphotos.com/16122460/26848/i/600/depositphotos_268484380-stock-photo-bouquet-of-beautiful-bright-gerbera.jpg" class="card-img-top" alt="flower">
                                    <h4 class="card-title text-white">Flower</h4>
                                    <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, magnam.
                                        <a href="#demo1" data-bs-toggle="collapse" aria-controls="demo1" class="text-white">Learn more</a>
                                    </p>
                                    <a class="card-link text-white" target="_blank" href="https://www.w3schools.com/">Visit the website</a>
                                    <div class="collapse" id="demo1">
                                        <p class="pb-3 text-white">Ad mollitia dolorem assumenda laboriosam sint minima, soluta tempore ea. Inventore animi culpa quos, excepturi quidem expedita asperiores quaerat fuga dolor placeat.</p>
                                      </div>
                                </div>
                                {{-- <div class="card-footer">Footer</div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card text-center">
                                {{-- <div class="card-header">
                                    
                                </div> --}}
                                <div class="card-body bg-primary">
                                    <img src="https://st.depositphotos.com/1359043/2279/i/450/depositphotos_22795844-stock-photo-blue-butterfly-isolated-on-white.jpg" class="card-img-top" alt="flower">
                                    <h4 class="card-title text-white">Butterfly</h4>
                                    <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, magnam.
                                        <a href="#demo2" data-bs-toggle="collapse" aria-controls="demo2" class="text-white">Learn more</a>
                                    </p>
                                    <a class="card-link text-white" target="_blank" href="https://www.w3schools.com/">Visit the website</a>
                                    <div class="collapse" id="demo2">
                                        <p class="pb-3 text-white">Ad mollitia dolorem assumenda laboriosam sint minima, soluta tempore ea. Inventore animi culpa quos, excepturi quidem expedita asperiores quaerat fuga dolor placeat.</p>
                                      </div>
                                </div>
                                {{-- <div class="card-footer">Footer</div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card text-center">
                                {{-- <div class="card-header">
                                    
                                </div> --}}
                                <div class="card-body bg-primary">
                                    <img src="https://st4.depositphotos.com/16122460/26848/i/600/depositphotos_268484380-stock-photo-bouquet-of-beautiful-bright-gerbera.jpg" class="card-img-top" alt="flower">
                                    <h4 class="card-title text-white">Juthi</h4>
                                    <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, magnam.
                                        <a href="#demo3" data-bs-toggle="collapse" aria-controls="demo3" class="text-white">Learn more</a>
                                    </p>
                                    <a class="card-link text-white" target="_blank" href="https://www.w3schools.com/">Visit the website</a>
                                    <div class="collapse" id="demo3">
                                        <p class="pb-3 text-white">Ad mollitia dolorem assumenda laboriosam sint minima, soluta tempore ea. Inventore animi culpa quos, excepturi quidem expedita asperiores quaerat fuga dolor placeat.</p>
                                      </div>
                                </div>
                                {{-- <div class="card-footer">Footer</div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card text-center">
                                {{-- <div class="card-header">
                                    
                                </div> --}}
                                <div class="card-body bg-primary">
                                    <img src="https://st4.depositphotos.com/16122460/26848/i/600/depositphotos_268484380-stock-photo-bouquet-of-beautiful-bright-gerbera.jpg" class="card-img-top" alt="flower">
                                    <h4 class="card-title text-white">Juthi</h4>
                                    <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, magnam.
                                        <a href="#demo4" data-bs-toggle="collapse" aria-controls="demo4" class="text-white">Learn more</a>
                                    </p>
                                    <a class="card-link text-white" target="_blank" href="https://www.w3schools.com/">Visit the website</a>
                                    <div class="collapse" id="demo4">
                                        <p class="pb-3 text-white">Ad mollitia dolorem assumenda laboriosam sint minima, soluta tempore ea. Inventore animi culpa quos, excepturi quidem expedita asperiores quaerat fuga dolor placeat.</p>
                                      </div>
                                </div>
                                {{-- <div class="card-footer">Footer</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
        

     </main>

     <footer>
        
          
     </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>