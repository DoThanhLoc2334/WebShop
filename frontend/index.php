<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo Shop</title>

  <?php include_once(__DIR__ . '/layouts/styles.php'); ?>

</head>

<body>
  <?php include_once(__DIR__ . '/layouts/partials/header.php'); ?>

  <main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/demoshop/assets/uploads/slider/slider1.webp" alt="">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/demoshop/assets/uploads/slider/slider2.webp" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container marketing"> <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <div class="icon">
            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
          </div>

          <h2 class="fw-normal">Purchase Subscription</h2>
          <p>Select a plan that fits your needs and get access to exclusive features.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="icon">
            <i class="fa fa-archive" aria-hidden="true"></i>
          </div>
          <h2 class="fw-normal">Add Products</h2>
          <p>Upload new products with descriptions, prices, and images to expand your offerings and attract customers.</p></div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="icon">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
          </div>
          <h2 class="fw-normal">Manage Orders</h2>
          <p>Track, process, and update customer orders efficiently to ensure timely fulfillment and satisfaction.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row --> <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5"> <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" height="500" preserveAspectRatio="xMidYMid slice" role="img" width="500" xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
          </svg> </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1"> <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" height="500" preserveAspectRatio="xMidYMid slice" role="img" width="500" xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
          </svg> </div>
      </div>
      
      <hr class="featurette-divider"> <!-- /END THE FEATURETTES -->
    </div><!-- /.container --> 
    
    

  <?php include_once(__DIR__ . '/layouts/partials/footer.php'); ?>
  <?php include_once(__DIR__ . '/layouts/scripts.php'); ?>
</body>

</html><div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        include_once('../dbconnect.php');
        $sql = "SELECT id, name, description, price, image_url FROM products";
        $result = $conn->query($sql);
        $data = [];
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_array(MYSQLI_NUM))
            {
                $data[] = $row;
            }
            $result->free_result();
        }
        $conn->close();
        
        ?>
        <?php foreach($data as $item): ?>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center"><div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body"><p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php endforeach; ?>
      </main>
