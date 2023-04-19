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
   #feedback{
    background: #191970;
   }

   .hr-style{
    border: 5px dotted white;
    border-bottom: none;
    width: 50px;
    align: center;
   }

   .custom-tooltip{
    --bs--tooltip-bg: var(--bs-danger);
   }
</style> 

</head>
  <body>
    <div class="container">
      <header class="bg-primary py-3 text-white text-center position-sticky">
          <h1 class="position-sticky">Learn With Juthi</h1>
          
      </header>

      <main>
         <div class="service-section bg-light pt-3">
           <div class="title text-center mb-3">
              <h3 class="font-weight-bold text-uppercase">Services</h3>
           </div>
           <div class="row text-left text-md-center">
            <div class="col-lg-3 p-3">
              <i class="bg-primary text-white p-2 fa-2x rounded-circle fa-sharp fa-solid fa-house"></i>
               <h4>Home Page</h4>
               <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae atque repellat modi nam similique eum quod sit ad id delectus eos commodi suscipit cumque, voluptatibus laudantium incidunt tempora corrupti voluptates.</p>
            </div>
            <div class="col-lg-3 p-3">
              <i class="bg-primary text-white p-2 fa-2x rounded-circle fa-sharp fa-solid fa-image"></i>
              <h4>Google Photo</h4>
              <p class="font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae atque repellat modi nam similique eum quod sit ad id delectus eos commodi suscipit cumque, voluptatibus laudantium incidunt tempora corrupti voluptates.</p>
           </div>
           <div class="col-lg-3 p-3">
            <i class="bg-primary text-white p-2 fa-2x rounded-circle fa-sharp fa-solid fa-truck-fast"></i>
            <h4>Transaction</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae atque repellat modi nam similique eum quod sit ad id delectus eos commodi suscipit cumque, voluptatibus laudantium incidunt tempora corrupti voluptates.</p>
         </div>
         <div class="col-lg-3 p-3">
          <i class="bg-primary text-white p-2 fa-2x rounded-circle fa-sharp fa-solid fa-cart-shopping"></i>
          <h4>Shopping Cart</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae atque repellat modi nam similique eum quod sit ad id delectus eos commodi suscipit cumque, voluptatibus laudantium incidunt tempora corrupti voluptates.</p>
       </div>
         </div>
         </div>

         <div class="customer-review bg-light text-center">
          <div class="title text-center mb-3">
            <h3 class="font-weight-bold">Customer Review</h3>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <blockquote class="blockquote p-3 text-center">
                <i class="p-2 fa-3x fas fa-user-circle"></i>
                <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti beatae dolor reprehenderit fugiat libero sed.I am learning <abbr title="bootstrap4">bs4</abbr></p>
                <footer class="blockquote-footer">
                  Juthi Akter in <cite>Youtube</cite>
                </footer>
              </blockquote>
            </div>
            <div class="col-lg-4">
              <blockquote class="blockquote p-3 text-center">
                <i class="p-2 fa-3x fas fa-user-circle"></i>
                <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti beatae dolor reprehenderit fugiat libero sed.I am learning <abbr title="bootstrap4">bs4</abbr></p>
                <footer class="blockquote-footer">
                  Juthi Akter in <cite>Youtube</cite>
                </footer>
              </blockquote>
            </div>
            <div class="col-lg-4">
              <blockquote class="blockquote p-3 text-center">
                <i class="p-2 fa-3x fas fa-user-circle"></i>
                <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti beatae dolor reprehenderit fugiat libero sed.I am learning <abbr title="bootstrap4">bs4</abbr></p>
                <footer class="blockquote-footer">
                  Juthi Akter in <cite>Youtube</cite>
                </footer>
              </blockquote>
            </div>
          </div>
         </div>

         {{-- collapse--toggle start --}}
         <div class="col-lg-4">
          <h2 class="p-3">About Myself</h2>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            <a href="#demo" data-bs-toggle="collapse" aria-controls="demo">Learn more</a>
          </p>
          <div class="collapse" id="demo">
            <p class="pb-3">Ad mollitia dolorem assumenda laboriosam sint minima, soluta tempore ea. Inventore animi culpa quos, excepturi quidem expedita asperiores quaerat fuga dolor placeat.</p>
          </div>
         </div>
        {{-- collapse--toggle end --}}

        {{-- media object starts here --}}

        <div class="d-flex mt-3 bg-primary text-white">
          <div class="flex-shrink-0">
            <img src="https://img.freepik.com/premium-photo/bouquet-wreath-flowers-plants-watercolor-paint-generative-ai_384720-959.jpg?w=826" class="rounded-circle align-self-end" style="width:80px">
          </div>
          <div class="flex-grow-1  ms-3">
            <h4 class="media-heading">John Doe <small class="text-muted"><i>Posted on January 10, 2021</i></small></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, ducimus vero omnis aliquam, eveniet iure in fugiat quod expedita, repudiandae at et dolore. Quam, mollitia quos? Ex, exercitationem consectetur! Quisquam?</p>
          </div>
        </div>
        <div class="d-flex mt-3">
         
          <div class="flex-grow-1  ms-3">
            <h4 class="media-heading">John Doe <small class="text-muted"><i>Posted on January 10, 2021</i></small></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, ducimus vero omnis aliquam, eveniet iure in fugiat quod expedita, repudiandae at et dolore. Quam, mollitia quos? Ex, exercitationem consectetur! Quisquam?</p>
          </div>
          <div class="flex-shrink-0">
            <img src="https://img.freepik.com/premium-photo/bouquet-wreath-flowers-plants-watercolor-paint-generative-ai_384720-959.jpg?w=826" class="rounded-circle" style="width:80px">
          </div>
        </div>
        
{{-- 
        <div class="media">
          <img style="width:80px" class="rounded-circle" src="https://img.freepik.com/premium-photo/bouquet-wreath-flowers-plants-watercolor-paint-generative-ai_384720-959.jpg?w=826" alt="Flower">
          <h5>I love Flowers</h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, repellat commodi. Illo at adipisci voluptas iste fugit deserunt veniam qui numquam mollitia excepturi aperiam recusandae, esse eius quibusdam ea quis!</p>
        </div> --}}
        {{-- media object starts here --}}

         {{-- student list --}}
         <div class="student-list">
          <ul class="list-group">
            <li class="list-group-item bg-info">Juthi Akter Panna</li>
            <li class="list-group-item bg-danger text-white">Farzana Akter Ratna</li>
            <li class="list-group-item bg-success text-white">Tarbina Akter Shadona</li>
            <a href="#" class="list-group-item bg-primary text-white">Yushra</a>
          </ul>
         </div>

         {{-- table section starts --}}
         <div class="table-responsive">
            <h2>Student Information</h2>

            <table class="table  table-hover table-bordered">
               <thead class="text-center table-primary">
                 <tr>
                   <th>Qualification</th>
                   <th>Institution</th>
                   <th>Passing Year</th>
                   <th>GPA</th>
                 </tr>
               </thead>
               <tbody class="table-group-divider text-center">
                 <tr>
                    <td>SSC</td>
                    <td>Matuail Adarsha School</td>
                    <td>2014</td>
                    <td>5.00</td>
                 </tr>
                 <tr>
                  <td>HSC</td>
                  <td>Motijhil Model School & College</td>
                  <td>2016</td>
                  <td>5.00</td>
               </tr>
               <tr>
                <td>BSC</td>
                <td>National University</td>
                <td>2023</td>
                <td>Pending</td>
             </tr>
             
               </tbody>
            </table>
         </div>
         {{-- table section ends --}}

         {{-- Carousel section starts --}}
         
         {{-- Carousel section ends --}}

         {{-- badge section starts here --}}
         <div class="p-3">
           <h2>Badge<span class="badge bg-secondary rounded-pill">New</span></h2>
         
           <button type="button" class="btn btn-primary position-relative">
              Notifications 
                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border bordre-light rounded-circle">
                  <span class="visually-hidden">new alert</span>
                </span></button>
          </div>

          {{-- badge section starts here --}}

          {{-- tooltip section starts here --}}
         <div class="p-3">
          <h2>Tooltip</h2>
        
          <button  type="button" class="btn btn-primary" 
                   data-bs-toggle="tooltip" data-bs-placement="right" 
                   data-bs-custome-class="custome-tooltip"
                   title="Click here see notifications">Notification</button>
         </div>

         {{-- tooltip section starts here --}}

         {{-- progess section starts here --}}
         <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

         {{-- progess section starts here --}}
         

         <div class="m-2 bg-success position-relative" style="height:200px">
          <button class="position-absolute start-50 top-50 translate-middle">Click 1</button>
         </div>

        <div class="card-container p-3 bg-primary d-flex justify-content-center align-items-center" style="height:100vh">
          <div class="card w-25 m-2 align-self-start">
            <div class="card-body">
              <h4 class="card-title">Card Title 1</h4>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita eos deserunt eveniet, accusamus quidem minus! Asperiores porro et debitis mollitia?</p>
            </div>
          </div>
          <div class="card w-25 m-2">
            <div class="card-body">
              <h4 class="card-title">Card Title 2</h4>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita eos deserunt eveniet, accusamus quidem minus! Asperiores porro et debitis mollitia?</p>
            </div>
          </div>
          <div class="card w-25 m-2 align-self-end">
            <div class="card-body">
              <h4 class="card-title">Card Title 3</h4>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita eos deserunt eveniet, accusamus quidem minus! Asperiores porro et debitis mollitia?</p>
            </div>
          </div>
         </div>
         
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
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
      </main>

      <footer>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
        </ul>
      </footer>
        </div>
          
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

{{-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  </body>
</html>