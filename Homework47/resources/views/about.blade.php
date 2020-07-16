<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title>About - BootsApp</title>
</head>

<body>
    <!-- Navigation -->
    <div class="mb-5">
    <nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow ">
        <a class="navbar-brand" href="/home">LOGO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="/home"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/about">
                        About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
             
                @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          {{ Auth::user()->name }} <span class="caret"></span>
                
                      <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                            </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    </div>
    <!-- Content -->
    <div class="container mt-5 mb-5">
        <h3 class="text-center display-3 mb-4">About Us</h3>
        <div class="card shadow" style="width: 100%;height: auto;">
            <div class="card-body">
                <h4>Lorem, ipsum dolor.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolores quos nisi debitis minus illo
                    optio eligendi quas quae ex officiis, dicta pariatur voluptatibus saepe numquam praesentium fuga.
                    Assumenda tenetur aliquam neque adipisci. Dicta, id!</p>
                <hr>
                <h4>Lorem, ipsum.</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, deleniti doloremque corrupti
                    perspiciatis aperiam laboriosam perferendis. Labore quisquam minus pariatur voluptate cumque quis
                    minima maiores, sapiente esse aspernatur debitis qui excepturi optio! Esse dicta doloribus, eligendi
                    eos deserunt vero iste quibusdam, aliquid hic ut fugit minima necessitatibus nulla sint ullam
                    tenetur pariatur eum nostrum?</p>
                <hr>
                <h4>Lorem.</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias maxime voluptatum sed voluptatem
                    exercitationem quam dolorum. Quam beatae nemo sequi.</p>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                        <div class="form">
                            <h3 style="text-align: center" class="pb-4">Subscribe to our newsletter</h3>
                            <form class="form-group">
                                <input type="text" class="form-control" placeholder="Enter E-mail">
                                <br>
                                <button class="btn btn-primary btn-block">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="container-fluid bg-dark text-white pb-4">
        <div class="row p-4">

            <div class="col  text-center">
                Follow us on
                <ul class="list-unstyled list-inline social-icons mt-1">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-facebook-square"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-google"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-twitter-square"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-2x fa-instagram"></i></a> </li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium fa-2x"></i></a></li>
                </ul>
            </div>

        </div>
        <div class="text-center">
            <span class="fas fa-code text-primary"></span>&nbsp;&nbsp;with&nbsp;&nbsp;<span class="fas fa-heart"
                style="color: red"></span> By Developers<br>

            The images are taken from <a href="https://unsplash.com">Unsplash.com</a> to avoid copyright issues.
        </div>
    </div>
</body>

</html>