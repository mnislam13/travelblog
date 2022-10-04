<header>
    <!--navigation bar starts-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><span>Travel</span>Blog</a>

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['id'])): ?>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"> <?php echo $_SESSION['username'] ?> </i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if ($_SESSION['admin']): ?>
                        <a class="dropdown-item" href="admindashboard.php">Dashboard</a>
                        <?php endif; ?>
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

        <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="signin.php">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>

        <?php endif; ?>
                            


            </ul>
        </div>
    </nav>
    <!--navigation bar ends-->
</header>