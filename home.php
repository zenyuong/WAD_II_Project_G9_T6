<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://unpkg.com/vue@next"></script>

    <title>Home</title>
</head>
<body>
    <!-- Navigation -->
    <div id="navdiv">
        <include-navbar></include-navbar>
    </div>
    <div id="slidediv">
        <div class="container wrapper">
            <div class="card">
              <div class="card-body">
                <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                    <div class="carousel-inner" style="height:400px">
                      <div class="carousel-item active">
                        <img src="images/dummy-post-square-1.jpeg" class="d-block w-100 img-responsive" alt="..."  />
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="..." />
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="..." />
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="container"style="padding-bottom:15px;">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img class="w-100"src="images/dummy-post-square-1.jpeg" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <span style="color:black !important;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type 
                            specimen book. It has survived not only five centuries, but also the leap into 
                            electronic typesetting, remaining essentially unchanged. It was popularised in the                         
                            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <span style="color:black !important;">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type 
                            specimen book. It has survived not only five centuries, but also the leap into 
                            electronic typesetting, remaining essentially unchanged. It was popularised in the                         
                            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and 
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img class="w-100"src="images/dummy-post-square-1.jpeg" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/navbar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>