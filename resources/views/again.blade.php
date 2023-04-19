<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <style>
      .carousel-item{
        height:32rem;
        background:#777;
        color:white;
        position:relative;
      }

      .container{
        position: absolute;
        bottom:0;
        left:0;
        right:0;
        padding-bottom:60px;
      }
    </style>

    <div id="myCarousel" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
              <h1>Example Headline</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quas dolorem quo perferendis labore dicta delectus ipsam modi, voluptatem ipsum dolores neque, facilis perspiciatis itaque ad ut optio. Distinctio, vitae.</p>
              <a href="#" class="btn btn-lg btn-primary">Login</a>
            </div>
        </div>
      </div>

</div>

    <div class="carousel-item">
      <div class="container">
        <h1>Example Headline</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quas dolorem quo perferendis labore dicta delectus ipsam modi, voluptatem ipsum dolores neque, facilis perspiciatis itaque ad ut optio. Distinctio, vitae.</p>
        <a href="#" class="btn btn-lg btn-primary">Login</a>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>