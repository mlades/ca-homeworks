<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Bootstrap Theme</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="/" class="navbar-brand">Glozzom</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="/services" class="nav-link">Services</a>
          </li>
          <li class="nav-item active">
            <a href="/blog" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="/contact" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Read Our Blog</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?</p>
        </div>
      </div>
    </div>
  </header>

  <!-- BLOG SECTION -->
  <section id="blog" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card-columns">
            <div class="card">
              <img src="https://source.unsplash.com/random/300x200" alt="" class="img-fluid card-img-top">
              <div class="card-body">
                <h4 class="card-title">Blog Post One</h4>
                <small class="text-muted">Written by Jeff on 05/20</small>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class="card p-3">
              <blockquote class="card-blockquote card-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">Someone Famous in
                    <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class="card">
              <img src="https://source.unsplash.com/random/301x200" alt="" class="img-fluid card-img-top">
              <div class="card-body">
                <h4 class="card-title">Blog Post Two</h4>
                <small class="text-muted">Written by Karen on 05/22</small>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class="card p-3 bg-danger text-white">
              <blockquote class="card-blockquote card-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class="blockquote-footer">
                  <small class="text-white">Someone Famous in
                    <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class="card">
              <img src="https://source.unsplash.com/random/302x200" alt="" class="img-fluid card-img-top">
              <div class="card-body">
                <h4 class="card-title">Blog Post Three</h4>
                <small class="text-muted">Written by Harry on 05/23</small>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class="card p-3">
              <blockquote class="card-blockquote card-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">Someone Famous in
                    <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- FOOTER -->
  <footer id="main-footer" class="text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright &copy;
            <span id="year"></span> Glozzom</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

  </script>
</body>

</html>