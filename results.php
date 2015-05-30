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
      <div class="col-sm-4">
        <h3>Results</h3>
        <p>Your instructor has not set a default save location. Please print this page out for your records.</p>
      </div>
      <div class="col-sm-8">
        <?php
          $test_name = $_POST['n'];
          $test_correct = $_POST['r'];
          $auth_usr = $_POST['u'];
        ?>
        <p>Test: <?php echo $test_name; ?></p>
        <p>ID: <?php echo $auth_usr; ?></p>
        <?php
          $result = str_split($test_correct);
          $q_right = 0;
          $q_wrong = 0;
          $q_nulled = 0;
          $q_finalscore = 0;
          $debug = false;
          if($debug)
          {
            echo $test_correct;
          }
          foreach($result as $i)
          {
            if($i == 'n')
            {
              $q_nulled++;
            }
            if($i == 'w')
            {
              $q_wrong++;
            }
            if($i == 'r')
            {
              $q_right++;
            }
          }
          $q_nulled--;
          $q_finalscore = ($q_right / ($q_right + $q_wrong)) * 100;
        ?>
        <p>Final score: <?php echo round($q_finalscore, 1); ?>%</p>
        <p>Null credit answers: <?php echo $q_nulled; ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <hr />
        <p>Copyright 2015 NETponents Software</p>
      </div>
    </div>
  </body>
</html>
