<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sugar Dashboard</title>

    <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/lib/optiscroll/dist/optiscroll.css">

    <style>
        .optiscroll-vtrack {
        	width: 10px;
            opacity: 0;
        	border-radius: 0;
        	box-shadow: none;
        }
        .optiscroll-htrack {
        }
    </style>

  </head>
  <body>

    <nav class="navbar sticky-top fixed-top navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="sugar-container">
        <div class="sugar-sidebar-container hidden-xs-down">
            <div class="sugar-sidebar-overlay"></div>
            <div class="sugar-sidebar optiscroll">
                <div class="sugar-sidebar-content">
                    <?php for ($i = 0; $i < 100; $i++): ?>
                        <h1>Item</h1>
                        <br>
                    <?php endfor ?>
                </div>
            </div>
        </div>

      <div class="sugar-content">
        <?php for ($i = 0; $i < 100; $i++): ?>
          <h1>Content</h1>
          <br>
        <?php endfor ?>
      </div>

    </div>


    <script src="assets/lib/jquery/dist/jquery.min.js" charset="utf-8"></script>
    <script src="assets/lib/optiscroll/dist/jquery.optiscroll.min.js">

    </script>
    <script>
      $(function() {
            $('.sugar-sidebar').optiscroll({
                minTrackSize: 10
            });
      });
    </script>

  </body>
</html>
