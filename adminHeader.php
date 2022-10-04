<header>
  <!--navigation bar starts--> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><span>Travel</span>Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION['username'])) ?>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"> <?php echo $_SESSION['username']; ?> </i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item active" href="admindashboard.php">Dashboard</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        
    
      </ul>
    </div>
  </nav>
  <!--navigation bar ends-->
  </header>