<!-- Navigation / START -->
<nav class="navbar navbar-default">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Show menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" id="logo" href="index.php">
        <span class="highlight-text">G</span>o<span class="highlight-text">P</span>ortlethen
      </a>
    </div>


    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="drop active">
          <a href="index.php">
            Home
          </a>

          <div class="dropdown">
            <ul>
              <li>
                <a href="#about">About</a>
              </li>
            </ul>
            <ul>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="drop">
          <a href="health.php">
            Health
          </a>

          <div class="dropdown">
            <ul>
              <li>
                <a href="healthnews.php">News</a>
              </li>
            </ul>
            <ul>
              <li>
                <a href="healthevent.php">Events</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="drop">
          <a href="clubs.php">
            Clubs
          </a>

          <div class="dropdown">
            <ul>
              <li>
                <a href="/member.php?p=addclub">Create a Club Page</a>
              </li>
            </ul>
            <ul>
              <li>
                <a href="clubs.php">Search Club Pages</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="drop">
          <a href="#">
            Maps
          </a>

          <div class="dropdown">
            <ul>
              <li>
                <a href="#">Viewpoints</a>
              </li>
            </ul>
            <ul>
              <li>
                <a href="#">Routes</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="drop">
          <?php if (isset($page) && $page->isLogin()) { ?>
          <a href="logout.php">
            Logout
          </a>
          <?php } else { ?>
          <a href="login.php">
            Login
          </a>

          <div class="dropdown">
            <ul>
              <li>
                <a href="register.php">Register</a>
              </li>
            </ul>
          </div>
        </li>
        <?php } ?>


      </ul>
    </div>
  </div>
</nav><!-- Navigation / END -->
