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
<body>

    <div class="text-center p-3">
        <h2>Employee Information</h2>
    </div>
   
  <div class="container">
    <div class="row">
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>

                {{-- EMPNO', 'FIRST_NAME', 'DOB', 'AGE', 'WORKER_TYPE --}}
                <th>Emp_No</th>
                <th>Emp_Name</th>
                <th>Date Of Birth</th>
                <th>Age</th>
                <th>Worker_Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $file)

              <tr>
                <td >{{ $file->empno}}</td>
                <td >{{$file->first_name}}</td>
                <td >{{ $file->dob}}</td>
                <td >{{$file->age}}</td>
                <td >{{ $file->worker_type}}</td>
                <td>
                  <div class="btn">
                     
                     <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Edit
                      </button>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            ...
                            </div>
                            <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                               <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <a href="" class="btn btn-danger">Delete</a>
                  </div>
                  
                </td>
              </tr>
            @endforeach
          </tbody>
        
    </table>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>

</body>
</html>