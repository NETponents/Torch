<html>
  <header>
    <title>Torch Testing Software</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="/Torch/src/style/default.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </header>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
         </button>
         <a class="navbar-brand" href="/Torch/">Torch Testing Software</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul>
          </ul>
         <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="jumbotron">
        <h1>Torch Testing Software</h1>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h3>Torch Home</h3>
        <p>Welcome to Torch Testing Software. To begin, click on an available test on the right and follow the instructions on the next page.</p>
      </div>
      <div class="col-sm-6">
        <h3>Available tests</h3>
        <ul>
          <?php
          $maxtests = 5;
          $tests = simplexml_load_file('./secure/test/tests.xml');
          //if(count($tests->test) > $maxtests)
          //{
          //  for($i = 0; $i <= $maxtests; $i++)
          //  {
          //    //echo '1';
          //    echo '<li><a href="test.php?t=' . $tests->test[$i]->path . '">' . $tests->test[$i]->title . '</a><li>';
          //  }
          //}
          //else
          //{
            foreach($tests->test as $i)
            {
              //echo '2';
              //echo '<li><a href="test.php?t=' . $tests->test[$i]->path . '">' . $tests->test[$i]->title . '</a><li>';
              echo '<li><a href="test.php?t=' . $i->path . '">' . $i->title . '</a></li>';
            }
          //}
          ?>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <hr />
        <p>Copyright 2015 NETponents Software. Version: <?php require_once('./src/php/version.php'); ?></p>
      </div>
    </div>
  </body>
</html>
