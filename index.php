<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            
    </head>

    <body>


       <!-- navbar -->
    <?php   include 'menu.php'; ?>
<!-- end of navbar -->

<!-- carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">


<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>


<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/quote1.jpg" alt="Los Angeles" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="images/quote2.jpg" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="images/quote3.jpg" alt="New York" width="1100" height="500">
  </div>
</div>


<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<!-- end of carousel -->


<!-- about section -->
    <section class="my-5">
        <div>
            <h3 class="text-center">About Me</h3>
        </div>

        <div class="container-fluid my-5 bg-light">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/stud.JPG" class="img-fluid aboutimg" />
                </div>

                <div class="col-lg-6 col-md-6 col-12 my-3">
                    <h2 class="display-4">Himanshu Morwal</h2>
                    <p class="py-5">Web-Developer and Software Engineer by Profession</p>
                    <a href="about.php" class="btn btn-success">check more</a>
                </div>
            </div>
        </div>
</section>
<!-- end of about section -->


<!-- projects -->
    <section class="my-2">
        <div class="py-5">
            <h2 class="text-center">Projects</h2>
        </div>

        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            
            <div class="card">
                <a href="https://maimia71.github.io/amazon/"><img class="card-img-top" src="images/amazon.jpg" alt="Card image"></a>
                <div class="card-body">
                    <h4 class="card-title">Amazon</h4>
                    <p class="card-text">Amazon basic clone website</p>
                    <a href="https://maimia71.github.io/amazon/" class="btn btn-primary">See more</a>
                </div>
            </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12">
            
            <div class="card">
                <a href="https://maimia71.github.io/portfolio/"><img class="card-img-top" src="images/himanshu.jpg" alt="Card image"></a>
                
                <div class="card-body">
                    <h4 class="card-title">Himanshu</h4>
                    <p class="card-text">Simple Bootstrap Based profile.</p>
                    <a href="#" class="btn btn-primary">See more</a>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
            
            <div class="card">
                <a href="https://maimia71.github.io/photox/"><img class="card-img-top" src="images/dslr.jpg" alt="Card image"></a>
                <div class="card-body">
                    <h4 class="card-title">Photo X</h4>
                    <p class="card-text">Photo sharing sites worldwide.</p>
                    <a href="https://maimia71.github.io/photox/" class="btn btn-primary">See more</a>
                </div>
            </div>

        </div>
        </div>
        </div>

        

    </section>
<!-- end of projects -->


<!-- gallery -->
    <section class="my-5">
        <div class="py-4">
            <h2 class="text-center">Gallery</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/adidas.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/bread.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/lumia.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/macbook.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nike.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/party.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/pastry.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/startup.jpg" class="img-fluid pb-4" />
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-4" />
                </div>

            </div>
        </div>
    </section>
<!-- end of gallery -->

<!-- contact -->
<section class="my-5">
        <div class="py-4">
            <h2 class="text-center">Contact</h2>
        </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control ">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control ">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control ">
            </div>

            <div class="form-group">
                <label>Comment</label>
                <textarea class="form-control" name="comment">
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</section>
<!-- end of contact -->

<!-- footer -->
    <footer>
        <p class="p-5 bg-dark text-white text-center">© Copyright Reserved 2020 <a href="about.php">Himanshu Morwal</a></p>
    </footer>
<!-- end of footer -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
