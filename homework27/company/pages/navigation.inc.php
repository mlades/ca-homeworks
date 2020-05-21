<nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
        <a class="navbar-brand" href="#">LOGO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav ml-auto">
               <?php 
                $navMenu="";
                $navItems = [
                    'index.php?id=index' => 'Home',
                    'index.php?id=about' => 'About',
                    'index.php?id=contact' => 'Contact',
                    'index.php?id=login' => 'Login'
                ];
               
                foreach($navItems as $key => $value) {
                    
                    if(!isset($_COOKIE['username'])) {
                        $navMenu .= '<li class="nav-item">
                            <a class="nav-link" href="' .$key. '">' .$value.'</a>
                        </li>';
                    } else {
                        if ($value !== 'Login') {
                            $navMenu .= '<li class="nav-item">
                            <a class="nav-link" href="' .$key. '">' .$value.'</a>
                            </li>' ;
                        } else {
                            $navMenu .= ' <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">'.
                            $_COOKIE['username'].
                            '</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Pofile</a>
                              <a class="dropdown-item" name="logout" href="logout.php">Logout</a>
                            </div>
                          </li>';
                        }                    
                    }
                }
                echo $navMenu;
               ?>
            </ul>
        </div>
</nav>