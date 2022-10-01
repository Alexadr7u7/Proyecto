<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>
<body style="background-color:black;">
    <header class="p-3 bg-dark ">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img src="img/unnamed.png"class="bi me-2 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" width="60" height="55">
            
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
              <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2 "data-bs-toggle="modal" data-bs-target="#Login">Login</button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSignin">Sign-up</button>        
            </div>
          </div>
        </div>
      </header>

  <!------------------ Modal login---------------->
                  <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content rounded-5 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                          <!-- <h5 class="modal-title">Modal title</h5> -->

                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-5 pt-0">
                          <form align="center">
                            <img class="mb-4" src="img/unnamed.png" alt=""width="60" height="55">
                            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                        
                            <div class="form-floating">
                              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                              <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                              <label for="floatingPassword">Password</label>
                            </div>
                        
                            <div class="checkbox mb-3">
                              <label>
                                <input type="checkbox" value="remember-me"> Remember me
                              </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
                          </form>
                        </div>                     

                      </div>
                    </div>
                  </div>
<!----------------------- Modal Sign up------------------------------------>
                  <div class="modal fade" id="modalSignin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content rounded-5 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                          <!-- <h5 class="modal-title">Modal title</h5> -->
                          <h2 class="fw-bold mb-0">Sign up for free</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                  
                        <div class="modal-body p-5 pt-0">
                          <form class="">
                            <div class="form-floating mb-3">
                              <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                              <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                              <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
                            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                            <hr class="my-4">
                            <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                            <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                              <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
                              Sign up with Twitter
                            </button>
                            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
                              <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
                              Sign up with Facebook
                            </button>
                            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
                              <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
                              Sign up with GitHub
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>      
      
  <!--------------Cuerpo principal------------------>
  
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center "style="background-image: url('img/gaming.jpg'); background-repeat: no-repeat;background-size: cover;">
      
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-5 fw-bold text-white p-3 mb-2 bg-primary text-white  bg-opacity-50 border border-2">GAMING</h1>
        <p class="lead fw-bold text-white fs-4">Aqui encontraras los mejores video juegos mas recomendados y jugados</p>
       
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>

    </div>
  
  <!------------------------------------------------>




<div class="container-fluid bg-dark ">
    <br>
    <footer class="container-fluid bg-dark d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-white">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-white">© 2021 Company, Inc</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </footer>
  </div>

</body>

<script src="js/bootstrap.bundle.min.js"></script>
</html>