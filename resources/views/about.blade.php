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
 
</style> 

</head>
  <body>
    <div class="container">
      <header class="bg-primary py-3 text-white text-center">
          <h1>Learn With Juthi</h1>
          
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
         {{-- student list --}}
         <div class="student-list">
          <ul class="list-group">
            <li class="list-group-item bg-info">Juthi Akter Panna</li>
            <li class="list-group-item bg-danger text-white">Farzana Akter Ratna</li>
            <li class="list-group-item bg-success text-white">Tarbina Akter Shadona</li>
            <a href="#" class="list-group-item bg-primary text-white">Yushra</a>
          </ul>
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

{{-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  </body>
</html>