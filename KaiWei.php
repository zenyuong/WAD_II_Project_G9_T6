<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navbar.css">

    <!-- Custom JavaScript -->
    <!-- <script src=screen2.js"></script> -->

    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.js"></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@next"></script>

    <title>Attractions</title>
</head>
<body>

    <!-- Navigation -->
    <div id="navdiv">
        <include-navbar></include-navbar>
    </div>

        <div class="row g-2 my-2">
            <div class="col-md-5 col-sm-6">
              <div class="form-floating ">
                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" >
                  <option selected></option>
                  <option value="1">North</option>
                  <option value="2">South</option>
                  <option value="3">East</option>
                  <option value="4">West</option>
                </select>
                <label for="floatingSelectGrid">Search Area</label>
              </div>
            </div>

            <div class="col-auto mt-3">
                <button class="btn btn-success" type="submit" >Search</button>
            </div>
        </div>

        <!-- <span style="padding-top: 15px; font-size: small; color: red;">if invalid:</span>
        <form class="form-floating" style="margin-bottom: 20px;">
            <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="example of invalid input">
            <label for="floatingInputInvalid">Invalid input</label>
          </form> -->
    </div>
        
    <!-- Cards -->
    <div class="PhotoFrame">

        <!-- <div class="row align-items-center"> -->
        <!-- <div class="row justify-content-center">
        <div class="col-md-6 col-xl-4">
            Add a card -->
            <!-- <div class="card h-100" style="width: 18rem; margin: auto;">
                <img src="/WAD2/krazyWomen/justin_bg.jpg" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">Justin House</h5>
                <p class="card-text">Ut fermentum condimentum semper. Sed pretium feugiat arcu, et fringilla neque.</p>
                <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
        </div>  -->




        <!-- Add a card -->
        <div class="row"  id='attraction' >
            <div class="col-sm-12 col-md-6 col-lg-3 display: block" v-for="a_obj in attractionDict">
                <div class="card mb-5 ">
                    <img :src="a_obj.photo" class="card-img-top mt-4 img-fluid" alt="item1">
                    <div class="card-body ">
                        <h5 class="card-title text-dark">{{a_obj.attraction}}</h5>
                        <p class="card-text text-dark">{{a_obj.desc}}</p>
                        <div class = "text-center">
                            <a href="#" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <!-- REFERENCE TO LOCAL EXTERNAL JAVASCRIPT-->
    <script src="js/attraction.js"></script>
    <script src="js/navbar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>