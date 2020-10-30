<header>
    
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark navigation pl-5" style="z-index:9991;">
        
        <a class="navbar-brand pl-5" href="index.php">Спорт за развој</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL" aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse pr-5" id="navbarSupportedContentXL">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pl-4 <?php if($page === 'home' ){echo 'active';}?>">
                    <a class="nav-link" href="index.php">ДОМА</a>
                </li>
                <li class="nav-item pl-4 dropdown  <?php if($page === 'takt' ){echo 'active';}?> ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-sidebar="true" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ТАКТ
                </a>
                <div class="dropdown-menu <?php if($page === 'takt' ){echo 'active';}?> " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="partnerships.php">ЛОКАЛНИ ПАРТНЕРСТВА И ОРГАНИЗАЦИИ</a>
                    <a class="dropdown-item" href="goals.php">ЦЕЛИ ЗА ОДРЖЛИВ РАЗВОЈ (ЦОР/SDGs)</a>
                    <a class="dropdown-item" href="sportgoals.php">СПОРТ И ЦЕЛИ ЗА ОДРЖЛИВ РАЗВОЈ (SDGs)</a>
                    <a class="dropdown-item" href="sportabilities.php">СПОРТ ЗА РАЗВОЈ СПОСОБНОСТИ</a>
                    <a class="dropdown-item" href="coaches.php">ИЗБОР НА ТРЕНЕРИ ЗА СПОРТ ЗА РАЗВОЈ</a>
                    
                </div>
                </li>
                <li class="nav-item pl-4 <?php if($page === 'about' ){echo 'active';}?>">
                    <a class="nav-link " href="about.php">ЗА НАС</a>
                </li>
                <li class="nav-item pl-4 <?php if($page === 'contact' ){echo 'active';}?>">
                    <a class="nav-link " href="contact.php">КОНТАКТ</a>
                </li>
            </ul>
        </div>
   
    </nav>
</header>
