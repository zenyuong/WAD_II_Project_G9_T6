<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/navbar.css">

    <script type="text/javascript">
    $(document).ready(function() {
        $('#toggle').click(function() {
            $('.loginsignup').toggle(); 
        });
    });
    function change(idElement) {
            var element = document.getElementById('change' + idElement);
            if (idElement === 1 || idElement === 2) {
                if (element.innerHTML === 'Login') {
                    element.innerHTML = 'Sign Up';
                }
                else {
                    element.innerHTML = 'Login';
                }
            }
    }
    </script>
    <title>Login / Sign Up</title>
</head>
<body>
    <!-- Navigation -->
    <div id="navdiv">
        <include-navbar></include-navbar>
    </div>
        
        <div class="d-flex justify-content-center align-items-center" >
            <section class="vh-100">
                <div class="container h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                      <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                          <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <button class="btn btn-primary active" aria-current="page" id="toggle" onClick="javascript:change(1)">
                                    <span id="change1">Login</span>
                                </button>

                                    <div id="signup">
                                        <form class="mx-1 mx-md-4 loginsignup">
                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                            </div>
                        
                                            <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model='userEmail' type="email" id="userEmail" class="form-control" required/>
                                                <label class="form-label" for="userEmail">Your Email</label>
                                            </div>
                                            </div>
                        
                                            <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model='pwd1' type="password" id="pwd1" class="form-control" required/>
                                                <label class="form-label" for="pwd1" >Password</label>
                                            </div>
                                            </div>
                        
                                            <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model='cfmPwd' type="password" id="cfmPwd" class="form-control" required/>
                                                <label class="form-label" for="cfmPwd">Repeat your password</label>
                                            </div>
                                            </div>
                        
                                            <div class="form-check d-flex justify-content-center mb-5">
                                            <input v-model='ToS' class="form-check-input me-2" type="checkbox" value='true' id="ToS" required/>
                                            <label class="form-check-label" for="ToS">
                                                I agree all statements in <a>Terms of service</a>
                                            </label>
                                            </div>
                        
                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg" v-on:click="register">Register</button>
                                            </div>
                                            <!-- <p v-if='showStatus'>{{status.status}}</p> -->
                                        </form>
                                    </div>
                                    <div id="login">
                                        <form class="mx-1 mx-md-4 loginsignup" style="display: none" >
                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model="loginEmail" type="email" id="loginEmail" class="form-control" required/>
                                                <label class="form-label" for="loginEmail">Email</label>
                                            </div>
                                            </div>
                        
                                            <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input v-model="loginPwd" type="password" id="loginPwd" class="form-control" required/>
                                                <label class="form-label" for="loginPwd">Password</label>
                                            </div>
                                            </div>
                        
                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" class="btn btn-primary btn-lg" v-on:click="login">Login</button>
                                            </div>
                                            <!-- <p v-if='showStatus'>{{status.status}}</p> -->

                                        </form>
                                    </div>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
              
                              <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">
              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>    
    </div>
    
    
</body>
<script src="js/navbar.js"></script>
<script src="js/login-registration.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>